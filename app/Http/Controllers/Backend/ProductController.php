<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id','desc')->where('status',1)->get();
        return view('backend.pages.product.manage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $brands = Brand::orderBy('name','asc')->where('status',1)->get();
        //Parent Categories
        $pcategories = Category::orderBy('name','asc')->where('is_parent',0)->get();
        return view('backend.pages.product.create',compact('brands','pcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->title             = $request->title;
        $product->slug             = Str::slug($request->title);
        $product->brand_id          = $request->brand_id;
        $product->category_id       = $request->category_id;
        $product->is_featured       = $request->is_featured;
        $product->regular_price     = $request->regular_price;
        $product->offer_price       = $request->offer_price;
        $product->quantity          = $request->quantity;
        $product->short_desc        = $request->short_desc;
        $product->long_desc         = $request->long_desc;
        $product->status            = $request->status;

        $product->save();

        $notification = array(
            'message' => 'Product Published Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('product.manage')->with($notification);
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
     * Display a listing of the trash.
     */
    public function trash()
    {
        $products = Product::orderBy('id','desc')->where('status',0)->get();
        return view('backend.pages.product.trash', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
