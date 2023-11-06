<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\Lead;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $totalLeads  = Lead::count();
        $leads = Lead::orderBy('created_at', 'desc')->paginate(10);
//        $leads = Lead::when($request->status !=null, function ($q) use ($request){
//            return $q->where('status_message', $request->status);
//        })->paginate(10);
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();



        return view('admin.index' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
