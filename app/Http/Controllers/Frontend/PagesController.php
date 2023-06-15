<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use App\Models\Division;
use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("frontend.pages.homepage");
    }

    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        //
        return view("frontend.pages.static-pages.about");
    }

    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        //
        return view("frontend.pages.static-pages.contact");
    }

    /**
     * Display a listing of the resource.
     */
    public function faq()
    {
        //
        return view("frontend.pages.static-pages.faq");
    }

    /**
     * Display a listing of the resource.
     */
    public function privacyPolicy()
    {
        //
        return view("frontend.pages.static-pages.privacy-policy");
    }

    /**
     * Display a listing of the resource.
     */
    public function returnRefund()
    {
        //
        return view("frontend.pages.static-pages.return-and-refund-policy");
    }

     /**
     * Display a listing of the resource.
     */
    public function toc()
    {
        //
        return view("frontend.pages.static-pages.toc");
    }

    /**
     * Display a listing of the resource.
     */
    public function products()
    {
        $products = Product::orderBy('id','desc')->where('status',1)->get();
        return view("frontend.pages.product.all-products", compact('products'));
    }


    /**
     * Display a listing of the resource.
     */
    public function pdetails($slug)
    {
        $pdetails = Product::where('slug',$slug)->first();
        return view("frontend.pages.product.details", compact('pdetails'));
    }

    /**
     * Display a listing of the resource.
     */
    public function userLogin()
    {
        //
        return view("frontend.pages.auth-user.login");
    }

    /**
     * Display a listing of the resource.
     */
    public function customerDashboard()
    {
        //
        return view("frontend.pages.customer-dashboard.myaccount");
    }


    /**
     * Display a listing of the resource.
     */
    public function cart()
    {
        //
        return view("frontend.pages.cart");
    }

    /**
     * Display a listing of the resource.
     */
    public function checkout()
    {
        //
        return view("frontend.pages.checkout");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    }
}
