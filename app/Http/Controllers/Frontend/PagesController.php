<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function products()
    {
        //
        return view("frontend.pages.product.all-products");
    }


    /**
     * Display a listing of the resource.
     */
    public function pdetails()
    {
        //
        return view("frontend.pages.product.details");
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
