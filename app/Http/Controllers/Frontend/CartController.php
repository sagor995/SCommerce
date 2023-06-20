<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Str;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.cart');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //check if logged in or not with product in cart or not.
        if(Auth::check()){
            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
        }else{
            $cart = Cart::where('ip_address', request()->ip())->where('product_id', $request->product_id)->first();
        }

        //If already exists in cart then.
        if(!is_null($cart)){
            $cart->increment('quantity');
        }else{
            $cart = new Cart();
            if(Auth::check()){
                $cart->user_id      = Auth::user()->id;
            }else{
                $cart->ip_address   = request()->ip();
            }
            $cart->product_id       = $request->product_id;
            $cart->quantity         = $request->quantity;
            $cart->save();
        }

        $notification = array(
            'message' => 'Item Added to Cart',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
        //return back();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cart = Cart::find($id);

        if(!is_null($cart)){

            $cart->delete();

            $notification = array(
                'message' => 'Item Removed',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }
}
