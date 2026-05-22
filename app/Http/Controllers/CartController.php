<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('product')->get();

        return view('cart', compact('cart'));
    }

    public function add(int $id)
    {
        $cart = Cart::where('product_id', $id)->first();

        if ($cart) {

            $cart->qty += 1;

            $cart->save();

        } else {

            Cart::create([

                'product_id' => $id,

                'qty' => 1

            ]);

        }

        return redirect()->back();
    }

    public function remove($id)
    {
        Cart::where('product_id', $id)->delete();

        return redirect()->back()
            ->with('success', 'Produk berhasil dihapus 😭🔥');
    }

    public function decrease(int $id)
    {
        $cart = Cart::where('product_id', $id)->first();

        if ($cart) {

            $cart->qty -= 1;

            if ($cart->qty <= 0) {

                $cart->delete();

            } else {

                $cart->save();

            }
        }

        return redirect()->back();
    }

    public function checkout()
    {
        $cartItems = Cart::with('product')->get();

        foreach ($cartItems as $item) {

            History::create([

                'user_id' => Auth::id(),

                'product_id' => $item->product_id,

                'quantity' => $item->qty,

                'total_price' => $item->product->price * $item->qty

            ]);

        }

        Cart::truncate();

        return response()->json([
            'success' => true
        ]);
    }
}