<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Division;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $divisions = Division::orderBy('priority_number', 'asc')->where('status', 1)->get();
        return view('backend.pages.division.manage', compact('divisions'));
    }

    /**
     * Display a listing of the trash resource.
     */
    public function trash()
    {
        //
        $divisions = Division::orderBy('name', 'asc')->where('status', 0)->get();
        return view('backend.pages.division.manage', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.pages.division.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $division                   = new Division();
        $division->name             = $request->name;
        $division->slug             = Str::slug($request->name);
        $division->priority_number  = $request->priority_number;
        $division->status           = $request->status;

        //dd($division);
        //exit();
        $division->save();

        $notification = array(
            'message' => 'Division Added Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('division.manage')->with($notification);
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
        $division = Division::find($id);
        if (!is_null($division)) {
            return view('backend.pages.division.edit', compact('division'));
        } else {
            //404 Not found
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $division = Division::find($id);
        if (!is_null($division)) {
            $division->name             = $request->name;
            $division->slug             = Str::slug($request->name);
            $division->priority_number  = $request->priority_number;
            $division->status           = $request->status;

            //dd($category);
            //exit();
            $division->save();

            $notification = array(
                'message' => 'Information Updated.',
                'alert-type' => 'info'
            );

            return redirect()->route('division.manage')->with($notification);
        } else {
            //404 Not found
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $division = Division::find($id);
        if (!is_null($division)) {
            //Image Delete

            //Content Delete
            //$division->delete();

            //Soft delete
            $division->status = 0;
            $division->save();

            $notification = array(
                'message' => 'The Division Moved to the Trash folder.',
                'alert-type' => 'error'
            );

            return redirect()->route('division.manage')->with($notification);
        } else {
            //404 Not found
        }
    }
}
