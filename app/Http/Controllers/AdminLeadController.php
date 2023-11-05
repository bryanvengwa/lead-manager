<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLeadRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class AdminLeadController extends Controller
{

    public function index()
    {

    }
// Controller

    public function search(\http\Env\Request $request)
    {
        $leads = Lead::where('first_name', 'like', '%' . $request->input('search') . '%')->get()->paginate(10);
        $totalLeads  = Lead::count();
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();

        return"sdfs";
//        return view('admin.rsearch' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lead= Lead::find($id);
        return view('admin.edit' ,compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        Lead::update($request);

        redirect('admin.index');
        //
    }


    /**
     * Remove thepublic function update(UpdateAdminRequest $request, Admin $admin)
     * {
     * //
     * } specified resource from storage.
     */
    public function destroy($id)
    {
        Lead::destroy($id);
        $url = redirect()->back()->with('reload', true)->getTargetUrl();

        return redirect($url);
    }
}
