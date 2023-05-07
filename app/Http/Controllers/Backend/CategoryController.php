<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::orderBy('name', 'asc')->where('status', 1)->where('is_parent', 0)->get();

        return view('backend.pages.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $parentCategories = Category::orderBy('name', 'asc')->where('is_parent', 0)->get();
        return view("backend.pages.category.create", compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->description = $request->description;
        $category->is_parent = $request->is_parent;

        if ($request->image) {
            $image = $request->file('image');
            $img = time() . '-cat.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

        //dd($category);
        //exit();
        $category->save();
        return redirect()->route('category.manage');
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
        $category = Category::find($id);
        if (!is_null($category)) {
            $parentCategories = Category::orderBy('name', 'asc')->where('is_parent', 0)->get();
            return view('backend.pages.category.edit', compact('parentCategories', 'category'));
        } else {
            //404 Not found
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->status = $request->status;
            $category->description = $request->description;
            $category->is_parent = $request->is_parent;

            if ($request->image) {

                if (File::exists('images/category/' . $category->image)) {
                    File::delete('images/category/' . $category->image);
                }

                $image = $request->file('image');
                $img = time() . '-br.' . $image->getClientOriginalExtension();
                $location = public_path('images/category/' . $img);
                Image::make($image)->save($location);
                $category->image = $img;
            }

            //dd($category);
            //exit();
            $category->save();
            return redirect()->route('category.manage');
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
        $categories = Category::orderBy('name', 'asc')->where('status', 0)->get();

        return view('backend.pages.category.trash', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        if (!is_null($category)) {
            //Image Delete

            //Content Delete
            //$category->delete();

            //Soft delete
            $category->status = 0;
            $category->save();
            return redirect()->route('category.manage');
        } else {
            //404 Not found
        }
    }
}
