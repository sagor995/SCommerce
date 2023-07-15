<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Division;
use App\Models\District;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            $divisions = Division::orderBy('priority_number','asc')->where('status',1)->get();
            $districts = District::orderBy('division_id','asc')->where('status',1)->get();
            return view("frontend.pages.customer-dashboard.myaccount" , compact('districts','divisions'));
        }else{
            return redirect()->route('userLogin');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        
        if(!is_null($user)){
            $user->name             = $request->name;
            $user->email            = $request->email;
            $user->phone            = $request->phone;
            $user->address_line1    = $request->address_line1;
            $user->address_line2    = $request->address_line2;
            $user->division_id      = $request->division_id;
            $user->district_id      = $request->district_id;
            $user->country_name     = $request->country_name;
            $user->zipCode          = $request->zipCode;
        }

        if ($request->image) {

            if (File::exists('images/users/' . $user->image)) {
                File::delete('images/users/' . $user->image);
            }
            
            $image = $request->file('image');
            $img = time() . '-br.' . $image->getClientOriginalExtension();
            $location = public_path('images/users/' . $img);
            Image::make($image)->save($location);
            $user->image = $img;
        }

        // If need to change password after matching with old one.
        /* if(!is_null($request->old_password)){
            if(Auth::user()->password == Hash::make($request->old_password)){
                if($request->password == $request->password_confirmation){
                    $user->password = Hash::make($request->password);
                }
            }
        } */

        if($request->password == $request->password_confirmation){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $notification = array(
            'message' => 'Information Updated.',
            'alert-type' => 'success'
        );

        return redirect()->route('customerDashboard')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
