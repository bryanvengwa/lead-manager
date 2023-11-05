<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Admin;
use App\Models\Lead;
use http\Env\Request;
use PhpParser\Node\Stmt\Return_;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
// Controller

    public function search(Request $request)
    {
        $leads = Lead::where('first_name', 'like', '%' . $request->input('search') . '%')->get()->paginate(10);
        $totalLeads  = Lead::count();
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();

return"sdfs";
//        return view('agent.rsearch' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agent.create');
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
        return view('agent.edit' ,compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        Lead::update($request);

        redirect('agent.index');
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
