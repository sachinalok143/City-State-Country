<?php

namespace App\Http\Controllers\Admin\Location\City;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sub_Region;
use App\District;
use App\City;
class DistrictController extends Controller
{
	public function districts()
	{
		$districts=District::all();//pluck('district_name','id');
		$states=\DB::table('states')->get();
        return response()->json(['states'=>$states,'districts'=>$districts,],200);
	}

	public function updateditrict(Request $request)
	{
		$district=District::find($request->district['id']);
		$district->district_name=$request->district['district_name'];
		$district->operating_status=$request->district['operating_status'];
		$district->state_id=$request->district['state_id'];
		$district->save();
		$districts=District::all();
		return response()->json(['districts'=>$districts],200);	
	}
	
	public function delete_district(Request $request)
	{
		$district=District::find($request->district)->delete();
    $districts=District::all();
    return response()->json(['districts'=>$districts],200);
	}

	public function AddDistrict(Request $request)
	{
		$district=new District;
		$district->district_name=$request->district['district_name'];
		$district->operating_status=$request->district['operating_status'];
		$district->state_id=$request->district['state_id'];
		$district->save();
		$districts=District::all();
		return response()->json(['districts'=>$districts],200);	
	}
	
	public function GetState(Request $request)
	{
		dd($request);
		$state=\DB::table('states')->where('id',$request->id)->get();
		dd($state);
	}
	

	public function seachState(Request $request)
	{
		$districts=District::where('state_id',$request->state)->get();
		return response()->json(['districts'=>$districts],200);
	}
}