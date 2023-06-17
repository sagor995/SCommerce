<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'ip_address',
        'product_id',
        'quantity',
        'order_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    // public function order(){
    //     return $this->belongsTo(Order::class);
    // }

    public static function totalItems(){
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->where('order_id', NULL)->get();
        }else{
            $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        }

        $total_item = 0;

        foreach($carts as $cart){
            $total_item += $cart->quantity;
        }
        return $total_item;
    }

    public static function totalItemsPrice(){
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->where('order_id', NULL)->get();
        }else{
            $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        }

        $total_item_price = 0;

        foreach($carts as $cart){
            if(!is_null($cart->product->offer_price)){
                $total_item_price += ($cart->quantity * $cart->product->offer_price);
            }else{
                $total_item_price += ($cart->quantity * $cart->product->regular_price);
            }
        }
        return $total_item_price;
    }

    //Total num of products in cart
    public static function totalCarts(){
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->where('order_id', NULL)->get();
        }else{
            $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        }

        return $carts;
    }
}
