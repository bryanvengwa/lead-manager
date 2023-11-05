<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;
use App\Models\Lead;
use Carbon\Carbon;
use http\Env\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $totalLeads  = Lead::count();
        $leads = Lead::orderBy('created_at', 'desc')->paginate(10);
//        $leads = Lead::when($request->status !=null, function ($q) use ($request){
//            return $q->where('status_message', $request->status);
//        })->paginate(10);
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();



        return view('agent.index' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
