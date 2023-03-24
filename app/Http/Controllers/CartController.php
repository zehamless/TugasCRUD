<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        $products = Product::with('category')->get();
        return view('home.products.product', compact('products'));
    }

    /**
     * Add to cart.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
    {
        $product = Product::findorFail($id);
        $cart = session()->get('cart',[]);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('products.index')->with('success', 'Product added to cart successfully.');
    }


    /**
     * Write code on Method
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect()->route('products.index')->with('success', 'Product added to cart successfully.');
    }

    /**
     * Remove from cart.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->route('products.index')->with('success', 'Product added to cart successfully.');
    }
}
