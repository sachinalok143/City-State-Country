<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Operator;
class SearchController extends Controller
{
    public function search()
    {
    	$cities=\DB::table('rto_subregions')->get();

    	return view('adminpanel.tools.location.cities.searchcity',compact('cities'));
    }

/*----------------------------------------for ambulace modules--------------------------------------------------*/
    

    public function show( $value='id')
    {	
    	
    	$city=App\City::where('id',$value);
    	dd($city);
    }

    public function alloperator(){
        $operators=Operator::all();
        // dd($operators);
        $countries=\DB::table('countries')->get();
        // $states=\DB::table('states')->get();
        // $districts=\DB::table('districts')->get();
        return response()->json(['operators'=>$operators,'countries'=>$countries],200);
    }




    public function getstates(Request $request, $id)
    {
        $StatesChartData=\DB::table('operators')
            ->where('country',$request->country_id)
            ->select('state', \DB::raw('count(id) as total'))
            ->groupBy('state')
            ->get();
        /*if($request->state_id){
            $StatesChartData=\DB::table('states')
            ->where('state_id',$request->state_id)
            ->select('id', \DB::raw('count(*) as total'))
            ->groupBy('id')
            ->get();
        }
        else
        {
          $StatesChartData=\DB::table('countries')
            ->select('id', \DB::raw('count(*) as total'))
            ->groupBy('id')
            ->get();   
        }*/
        dd($StatesChartData);
        $states=\DB::table('states')->where('country_id',$id)->get();
        if(count($states)){
        return response()->json(['states'=>$states,],200);
        }
        else
        {
            return response()->json(['states'=>''],201); 
        }
    }
    public function getdistricts(Request $request,$id)
    {

        $districtsChartData=\DB::table('operators')
            ->where('state',$request->state_id)
            ->select('district', \DB::raw('count(*) as total'))
            ->groupBy('district')
            ->get();

        /*if($request->district_id){
            $districtsChartData=\DB::table('states')
            ->where('country_id',$request->country_id)
            ->select('id', \DB::raw('count(*) as total'))
            ->groupBy('id')
            ->get();
        }
        else
        {
          $districtsChartData=\DB::table('cities')
            ->where('district_id',$request->district_id)
            ->select('id', \DB::raw('count(*) as total'))
            ->groupBy('id')
            ->get();   
        }*/
        dd($districtsChartData);
     $districts=\DB::table('districts')->where('state_id',$id)->get();
        if(count($districts)){
        return response()->json(['districts'=>$districts,],200);
        }
        else
        {
            return response()->json(['districts'=>''],201); 
        }
    }
}
