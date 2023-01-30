<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enroll;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $cartItems = \Cart::getContent();
        return view('cart', compact('categories', 'cartItems'));
    }

    public function store(Request $request)
    {
        \Cart::add(array(
            'id' => $request->course_id,
            'name' => $request->course_name,
            'price' => $request->course_price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $request->course_image,
            ),
        ));

        return redirect()->route('cart')->with('success', 'Item added to cart successfully!');
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart')->with('success', 'Item removed from cart successfully!');
    }

    public function payment(Request $request)
    {
        $total = \Cart::getTotal();
        $enroll_id = [];
        if (!$request->user_id) {
            $user_id = $this->createAccount($request);
            $cartItems = \Cart::getContent();
            foreach ($cartItems as $cartItem) {
                $enroll = new Enroll();
                $enroll->user_id = $user_id;
                $enroll->course_id = $cartItem->id;
                $enroll->payment_method = 'stripe';
                $enroll->payment_status = 'pending';
                $enroll->payment_amount = $cartItem->price;
                $enroll->payment_currency = 'USD';
                $enroll->save();
                $enroll_id[] = $enroll->id;
            }
            \Cart::clear();
        } else {
            $cartItems = \Cart::getContent();
            foreach ($cartItems as $cartItem) {
                $enroll = new Enroll();
                $enroll->user_id = auth()->user()->id;
                $enroll->course_id = $cartItem->id;
                $enroll->payment_method = 'stripe';
                $enroll->payment_status = 'pending';
                $enroll->payment_amount = $cartItem->price;
                $enroll->payment_currency = 'USD';
                $enroll->save();
                $enroll_id[] = $enroll->id;
            }
            \Cart::clear();
        }
        Session::put('user_enroll_id', $enroll_id);
        $session = [
            'total_amount' => $total,
            'enroll_id' => $enroll_id,
        ];
        return redirect()->route('stripe')->with($session);
    }

    public function createAccount($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $users = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($users);
        return $users->id;
    }
}
