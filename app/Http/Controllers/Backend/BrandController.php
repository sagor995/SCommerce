<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Intervention\Image\Facades\Image as Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::orderBy('name', 'asc')->where('status', 1)->get();

        return view('backend.pages.brand.manage', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->status = $request->status;
        $brand->description = $request->description;

        if ($request->image) {
            $image = $request->file('image');
            $img = time() . '-br.' . $image->getClientOriginalExtension();
            $location = public_path('images/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        //dd($brand);
        //exit();
        $brand->save();
        return redirect()->route('brand.manage');
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
        $brand = Brand::find($id);
        if (!is_null($brand)) {
            return view('backend.pages.brand.edit', compact('brand'));
        } else {
            //404 Not found
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);
        if (!is_null($brand)) {
            $brand->name = $request->name;
            $brand->slug = Str::slug($request->name);
            $brand->status = $request->status;
            $brand->description = $request->description;
            //dd($brand);
            //exit();
            $brand->save();
            return redirect()->route('brand.manage');
        } else {
            //404 Not found
        }
    }

    /**
     * Display a listing of the trash.
     */
    public function trash()
    {
        //
        $brands = Brand::orderBy('name', 'asc')->where('status', 0)->get();

        return view('backend.pages.brand.trash', compact('brands'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $brand = Brand::find($id);
        if (!is_null($brand)) {
            //Image Delete

            //Content Delete
            //$brand->delete();

            //Soft delete
            $brand->status = 0;
            $brand->save();
            return redirect()->route('brand.manage');
        } else {
            //404 Not found
        }
    }
}
