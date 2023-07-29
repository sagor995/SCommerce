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
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Auth;

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
        $products = Product::orderBy('id', 'desc')->where('status', 1)->get();
        return view("frontend.pages.product.all-products", compact('products'));
    }


    /**
     * Display a listing of the resource.
     */
    public function pdetails($slug)
    {
        $pdetails = Product::where('slug', $slug)->first();
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
     * Update the specified resource in storage.
     */
    public function updateProfile(User $user, Request $request)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'country_name' => $request->country_name,
            'zipCode' => $request->zipCode
        ]);

        $notification = array(
            'message' => 'Profile updated successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('customerDashboard')->with($notification);
    }




    public function checkout()
    {
        $divisions = Division::orderBy('priority_number', 'asc')->where('status', 1)->get();
        $districts = District::orderBy('division_id', 'asc')->where('status', 1)->get();
        return view("frontend.pages.checkout", compact('districts', 'divisions'));
    }
}
