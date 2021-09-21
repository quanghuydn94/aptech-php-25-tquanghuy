<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->view('Product/index', ['products' => $products]);
    }
    public function cart()
    {
        return response()->view('Product/cart');
    }
    public function addCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->PhoneName,
                    "quantity" => 1,
                    "price" => $product->Price,
                    "image" => $product->Image,
                ],
            ];
            session()->put('cart', $cart);
            return redirect()->route('product.Cart');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('product.Cart');
            // dd(session('cart'));
        }
        $cart[$id] = [
            "name" => $product->PhoneName,
            "quantity" => 1,
            "price" => $product->Price,
            "image" => $product->Image,
        ];
        session()->put('cart', $cart);
        // dd(session('cart'));

        return redirect()->route('product.Cart');

    }
    public function destroy(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                session()->forget($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->route('product.Cart');
        }
    }
}