<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organization',compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'orgname' => 'required',
            'auth_per_name' => 'required',
            'auth_contact_number' => 'required',
            'auth_email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'gst_number' => 'required',
            'status' => 'required',

        ]);
        Organization::create([
            'orgname'=>$request->orgname,
            'auth_per_name'=>$request->auth_per_name,
            'auth_contact_number'=>$request->auth_contact_number,
            'auth_email'=>$request->auth_email,
            'address'=>$request->address,
            'city'=>$request->city,
            'gst_number'=>$request->gst_number,
            'status'=>$request->status,
        ]);
        return redirect()->route('organization.index')
                        ->with('success','Data Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organization', compact('organizations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'orgname' => 'required',
            'auth_per_name' => 'required',
            'auth_contact_number' => 'required',
            'auth_email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'gst_number' => 'required',
            'status' => 'required',
        ]);
        $organization->update([
            'orgname'=>$request->orgname,
            'auth_per_name'=>$request->auth_per_name,
            'auth_contact_number'=>$request->auth_contact_number,
            'auth_email'=>$request->auth_email,
            'address'=>$request->address,
            'city'=>$request->city,
            'gst_number'=>$request->gst_number,
            'status'=>$request->status,
        ]);
        return redirect()->route('orgnaization.index')
                        ->with('success','Data Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organization.index')
                        ->with('success','Data Created Successfully');
    }
}
