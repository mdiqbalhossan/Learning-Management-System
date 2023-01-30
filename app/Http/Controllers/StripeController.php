<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = $request->stripeToken;
        $charge = \Stripe\Charge::create([
            'amount' => 1000,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);
        $user_id =  Session::get('user_enroll_id');
        if (isset($user_id) && count($user_id) > 0) {
            foreach ($user_id as $id) {
                $enroll = Enroll::where('id', $id)->where('payment_status', 'pending')->first();
                $enroll->payment_status = 'completed';
                $enroll->payment_time = date('Y-m-d');
                $enroll->save();
            }
        } else {
            $enroll = Enroll::where('id', $user_id)->where('payment_status', 'pending')->first();
            $enroll->payment_status = 'completed';
            $enroll->payment_time = date('Y-m-d');
            $enroll->save();
        }
        Session::flash('success', 'Payment successful!');

        return redirect()->route('dashboard');
        // dd($user_id);
    }
}
