<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request) {
        $request->validate([
            'product_id' => 'required|integer',
            'qty' => 'required|integer'
        ]);
        $data = $request->all();

        // if($request->ajax()) {
        //     return response()->json([
        //         'answer' => 'success',
        //         'id' => $data['product_id'],
        //         'qty' => $data['qty']
        //     ]);
        // } else {
        //     dd($data);
        // }

        $product = Product::findOrFail($data['product_id']);
        $cart = new Cart();
        $cart->addToCart($product, $data['qty']);

        return view('cart.cart-modal');
    }

    public function show() {
        return view('cart.cart-modal');
    }

    public function delItem($product_id) {
        $cart = new Cart();
        $cart->delItem($product_id);
        return view('cart.cart-modal');
    }
}
