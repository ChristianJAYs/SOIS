<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresidentController extends Controller
{
    public function index()
    {
        return view('dashboards.org.cs.president.cs_index');
    }
    public function profile()
    {
        return view('dashboards.org.cs.president.profile');
    }
    public function functions()
    {
        return view('dashboards.org.cs.president.functions');
    }
    public function listofevents()
    {
        $events = Events::latest()->paginate(10);

        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        // $userid = Events::select('id')->get();
        $eventid = DB::table('events')->select('id')->get();
        $eventstatus = DB::table('events')->select('event_status')->get();
        // dd($eventstatus);
        return view('dashboards.org.cs.president.listofevents',compact('eventlist','eventid','eventstatus'))->with('i', (request()->input('page', 1) - 1) * 5);
        
        // return view('dashboards.org.cs.president.messages');
    }
    public function settings()
    {
        return view('dashboards.org.cs.president.settings');
    }
}
