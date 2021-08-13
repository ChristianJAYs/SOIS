<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViceUploadEvent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::latest()->paginate(10);

        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        // $userid = Events::select('id')->get();
        $eventid = DB::table('events')->select('id')->get();
        // dd($eventlist);
        // dd($eventlist);
        // return view('subjects.index')->with('subjects',$subjects);
        // return view('dashboards.org.cs.vice_president.upload',compact('event'));
        // return view('dashboards.org.cs.vice_president.upload',compact('eventlist'));
        return view('dashboards.org.cs.vice_president.upload',compact('eventlist','eventid'))->with('i', (request()->input('page', 1) - 1) * 5);

        // $eventlist = Events::latest()->paginate(5);

        // return view('dashboards.org.cs.vice_president.upload', compact('eventlist'))
            // ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('viceCrud.create');
        return view('dashboards.viceCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('viceupload')->with('success','Event has been created');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {

        return view('dashboards.org.cs.vice_president.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        $data = $events;
        // print_r($data);
        // dd($data);
        $eventid = DB::table('events')->select('id')->get();
        // dd($eventid);
        // $users = DB::table('events')->get();

        return view('dashboards.viceCrud.edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        $request->validate([
            'event_name' => 'required|string',
            'event_description' => 'required|string',
            'event_participants' => 'required|string',
            'event_date' => 'required|string',
            'event_status' => 'required|string',
        ]);

        // $name = $request->input('stud_name');
      // DB::update('update student set name = ? where id = ?',[$name,$id]);

        // print_r($events);
        // dd($request);
        // dd($events);
        // $events = Events::find($events);

        $events->update($request->all());

        return redirect()->route('viceupload')->with('success','Event update succesfully');
        // return redirect()->route('upload')->with('success',$events);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        // $deletion = Events::findOrFail($events);
        // print_r($events);

        // $id = $events->input('id');
        // Kamar_Theresia::find($id)->delete();

        // dd($events);

        $events->delete();

        return redirect()->route('viceupload')->with('success',$events);

    }
}
