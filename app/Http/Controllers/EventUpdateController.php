<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventUpdateController extends Controller
{
   public function edit(Request $request) {
      $id = $request->input('id');
      $name = $request->input('event_name');
      $description = $request->input('event_description');
      $participants = $request->input('event_participants');
      $date = $request->input('event_date');
      $status = $request->input('event_status');
      DB::update('update events set event_name = ?, event_description = ?,event_participants = ?, event_date = ?, event_status = ? where id = ?',[$name,$description,$participants,$date,$status,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';

    return redirect()->route('upload')->with('success','Event update succesfully');
   }
}
