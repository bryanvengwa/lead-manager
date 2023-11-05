<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class adminSearchController extends Controller
{

    public function search(Request $request){
        $query = $request->input('query');
        switch ($query) {
            case 'accepted':
                $leads = Lead::where('status', 'accepted')->paginate(10);
                break;
            case 'denied':
                $leads = Lead::where('status', 'denied')->paginate(10);
                break;
            case 'call back':
                $leads = Lead::where('status', 'call back')->paginate(10);
                break;
            case 'pending':
                $leads = Lead::where('status', 'pending')->paginate(10);
                break;
            case 'survey booked':
                $leads = Lead::where('status', 'survey booked')->paginate(10);
                break;
            case 'survey conducted':
                $leads = Lead::where('status', 'survey conducted')->paginate(10);
                break;
            case 'installed':
                $leads = Lead::where('status', 'installed')->paginate(10);
                break;
            default:
                $leads = Lead::orderBy('created_at', 'desc')->paginate(10);

        }
        $prevPageLink = $leads->previousPageUrl();
        $nextPageLink = $leads->nextPageUrl();
        $totalLeads  = Lead::count();

        return view('admin.index' , compact('leads' , 'prevPageLink','nextPageLink','totalLeads'));

    }
}
