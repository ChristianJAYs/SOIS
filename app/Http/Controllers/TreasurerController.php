<?php

namespace App\Http\Controllers;

use App\Models\Funds;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreasurerController extends Controller
{
    public function index()
    {
        $funds = Funds::latest()->paginate(10);

        $fundslist = Funds::select('id','fund_name','fund_description','fund_goal','fund_collected','fund_status','created_at','updated_at')->get();
        return view('dashboards.org.cs.treasurer.cs_index',compact('fundslist'));
    }
    public function profile()
    {
        return view('dashboards.org.cs.treasurer.profile');
    }
    public function listofevents()
    {
        $eventlist = Events::select('id','event_name','event_description','event_participants','event_date','event_status')->get();
        return view('dashboards.org.cs.treasurer.listofevents',compact('eventlist'));
    }
    public function functions()
    {
        return view('dashboards.org.cs.treasurer.functions');
    }
    public function settings()
    {
        return view('dashboards.org.cs.treasurer.settings');
    }



    public function view()
    {
        $funds = Funds::latest()->paginate(10);

        $fundslist = Funds::select('id','fund_name','fund_description','fund_goal','fund_collected','fund_status')->get();
        return view('dashboards.treasurerCrud.view',compact('fundslist'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('dashboards.treasurerCrud.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'fund_name'=>'required',
            'fund_description'=>'required',
            'fund_goal'=>'required',
            'fund_collected'=>'required',
            'fund_status'=>'required',
        ]);

        Funds::create($request->all());

        return redirect()->route('treasurerupload')->with('success','Event has been created');  
    }

    public function show(Funds $funds)
    {

        return view('dashboards.treasurerCrud.show',compact('funds'));
    }

    public function edit(Funds $funds)
    {
        $data = $funds;
        // print_r($data);
        $eventid = DB::table('funds')->select('id')->get();
        return view('dashboards.treasurerCrud.edit',compact('funds'));
    }

    public function update(Request $request, Funds $funds)
    {
        $request->validate([
            'fund_name'=>'required|string',
            'fund_description'=>'required|string',
            'fund_goal'=>'required|string',
            'fund_collected'=>'required|string',
            'fund_status'=>'required|string',
        ]);
        // print_r($funds);
        $funds->update($request->all());
        return redirect()->route('treasurerupload')->with('success','Event update succesfully');
    }

    public function destroy(Funds $funds)
    {
        $funds->delete();

        return redirect()->route('treasurerupload')->with('success',$funds);

    }
}
