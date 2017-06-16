<?php

namespace App\Http\Controllers\Admin\Location\City;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sub_Region;
use App\District;
use App\State;
use App\City;
class StateController extends Controller
{
	public function state()
	{
		$states=State::all();//pluck('district_name','id');
		$countries=\DB::table('countries')->get();
        return response()->json(['states'=>$states,'countries'=>$countries,],200);
	}

	public function updatestate(Request $request)
	{
		// dd($request->state);
		$state=State::find($request->state['id']);
		$state->name=$request->state['name'];
		$state->Capital=$request->state['Capital'];
		$state->country_id=$request->state['country_id'];
		$state->rto_state_code=$request->state['rto_state_code'];
		$state->save();
		$states=State::all();
		return response()->json(['states'=>$states],200);	
	}
	public function delete_state(Request $request)
	{
		$state=State::find($request->state)->delete();
    $states=State::all();
    return response()->json(['states'=>$states],200);
	}

	public function AddState(Request $request)
	{
		$state=new State;
		$state->name=$request->state['name'];
		$state->Capital=$request->state['Capital'];
		$state->country_id=$request->state['country_id'];
		$state->rto_state_code=$request->state['rto_state_code'];
		$state->save();
		$states=State::all();
		return response()->json(['states'=>$states],200);
		
	}

	public function GetState(Request $request)
	{
		dd($request);
		$state=\DB::table('states')->where('id',$request->id)->get();
		dd($state);
	}
	public function searchByCountry(Request $request)
	{
		$states=State::where('country_id',$request->country)->get();
		return response()->json(['states'=>$states],200);
	}
}