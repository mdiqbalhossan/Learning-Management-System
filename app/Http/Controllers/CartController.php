<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
}
