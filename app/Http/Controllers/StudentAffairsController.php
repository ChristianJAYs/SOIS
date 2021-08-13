<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAffairsController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        $userslist = User::select('id','name','email','organization','roles','student_number','email_verified_at','created_at','updated_at')->get();

        return view('dashboards.affairs.index',compact('userslist'));
    }
    public function profile()
    {
        return view('dashboards.affairs.profile');
    }
    public function listofevents()
    {
        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        return view('dashboards.affairs.listofevents',compact('eventlist'));
    }
    public function functions()
    {
        return view('dashboards.affairs.functions');
    }
    public function settings()
    {
        return view('dashboards.affairs.settings');
    }



    public function view()
    {
        $events = Events::latest()->paginate(10);

        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        $eventid = DB::table('events')->select('id')->get();
        return view('dashboards.affairsCrud.view',compact('eventlist','eventid'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('dashboards.affairsCrud.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'event_name'=>'required',
            'event_description'=>'required',
            'event_participants'=>'required',
            'event_date'=>'required',
            'event_status'=>'required',
        ]);

        Events::create($request->all());

        return redirect()->route('affairsupload')->with('success','Event has been created');  
    }

    public function show(Events $events)
    {

        return view('dashboards.affairsCrud.show',compact('events'));
    }

    public function edit(Events $events)
    {
        $data = $events;
        print_r($data);
        $eventid = DB::table('events')->select('id')->get();
        return view('dashboards.affairsCrud.edit',compact('events'));
    }

    public function update(Request $request, Events $events)
    {
        $request->validate([
            'event_name' => 'required|string',
            'event_description' => 'required|string',
            'event_participants' => 'required|string',
            'event_date' => 'required|string',
            'event_status' => 'required|string',
        ]);
        print_r($events);
        $events->update($request->all());
        return redirect()->route('affairsupload')->with('success','Event update succesfully');
    }

    public function destroy(Events $events)
    {
        $events->delete();

        return redirect()->route('affairsupload')->with('success',$events);

    }
}
