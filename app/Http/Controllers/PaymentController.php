<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function index($id = null)
    {
        if ($id != null) {
            $enroll = Enroll::where('id', $id)->where('payment_status', 'pending')->first();
            Session::put('user_enroll_id', $id);
            Session::put('total_amount', $enroll->payment_amount);
        }
        return view('payment');
    }

    public function paymentPost(Request $request)
    {
        $user_id =  Session::get('user_enroll_id');
        if (isset($user_id) && is_array($user_id) > 0) {
            foreach ($user_id as $id) {
                $orderNumber = '#' . date('YmdHis');
                $enroll = Enroll::where('id', $id)->where('payment_status', 'pending')->first();
                $enroll->payment_status = 'completed';
                $enroll->payment_time = date('Y-m-d');
                $enroll->payment_number = $request->payment_number;
                $enroll->transaction_id = $request->transaction_id;
                $enroll->reference_number = $request->reference_number;
                $enroll->order_number = $orderNumber;
                $enroll->payment_method = $request->payment_method;
                $enroll->save();
            }
        } else {
            $orderNumber = '#' . date('YmdHis') . '-' . uniqid();
            $enroll = Enroll::where('id', $user_id)->where('payment_status', 'pending')->first();
            $enroll->payment_status = 'completed';
            $enroll->payment_time = date('Y-m-d');
            $enroll->payment_number = $request->payment_number;
            $enroll->transaction_id = $request->transaction_id;
            $enroll->reference_number = $request->reference_number;
            $enroll->order_number = $orderNumber;
            $enroll->payment_method = $request->payment_method;
            $enroll->save();
        }
        Session::flash('success', 'Payment successful!');

        return redirect()->route('dashboard');
    }
}
