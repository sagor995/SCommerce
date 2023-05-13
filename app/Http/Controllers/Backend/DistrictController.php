<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Division;
use App\Models\District;


class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::orderBy('name', 'asc')->where('status', 1)->get();
        return view('backend.pages.district.manage', compact('districts'));
    }

    /**
     * Display a listing of the trash resource.
     */
    public function trash()
    {
        //
        $districts = District::orderBy('name', 'asc')->where('status', 0)->get();
        return view('backend.pages.district.manage', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('backend.pages.district.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $district                   = new District();
        $district->name             = $request->name;
        $district->slug             = Str::slug($request->name);
        $district->division_id      = $request->division_id;
        $district->status           = $request->status;

        //dd($district);
        //exit();
        $district->save();

        $notification = array(
            'message' => 'District Added Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('district.manage')->with($notification);
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
        $district = District::find($id);
        $divisions = Division::orderBy('priority_number', 'asc')->where('status', 1)->get();
        if (!is_null($district)) {
            return view('backend.pages.district.edit', compact('divisions', 'district'));
        } else {
            //404 Not found
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $district = District::find($id);

        if (!is_null($district)) {
            $district->name             = $request->name;
            $district->slug             = Str::slug($request->name);
            $district->division_id      = $request->division_id;
            $district->status           = $request->status;

            //dd($district);
            //exit();
            $district->save();

            $notification = array(
                'message' => 'District Information Updated.',
                'alert-type' => 'info'
            );

            return redirect()->route('district.manage')->with($notification);
        } else {
            //404 Not found
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $district = District::find($id);
        if (!is_null($district)) {
            //Image Delete

            //Content Delete
            //$district->delete();

            //Soft delete
            $district->status = 0;
            $district->save();

            $notification = array(
                'message' => 'District Information Deleted.',
                'alert-type' => 'error'
            );

            return redirect()->route('district.manage')->with($notification);
        } else {
            //404 Not found
        }
    }
}
