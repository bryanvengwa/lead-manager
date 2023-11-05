<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $leads = Lead::where('first_name', 'like', '%' . $request->input('search') . '%')->simplePaginate();
        $totalLeads  = Lead::count();
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();

//        return"sdfs";
        return view('agent.search' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));

    }
}
