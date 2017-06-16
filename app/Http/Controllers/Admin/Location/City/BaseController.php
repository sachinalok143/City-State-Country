<?php

namespace App\Http\Controllers\Admin\Location\City;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sub_Region;
use App\District;
use App\City;

class BaseController extends Controller
{
    public function index()
    {
        $sub_regions=\DB::table('rto_subregions')->get();
       $cities=City::all();
        $districts=District::all();//pluck('district_name','id');
        return response()->json(['cities'=>$cities,'districts'=>$districts,'sub_regions'=>$sub_regions],200);
    }
 
    public function load_create()
    {
        $sub_regions=Sub_Region::lists('name','id');
        $districts=District::lists('district_name','id');
        return view('adminpanel.tools.location.cities.micros.create_city_form',compact('sub_regions','districts'))->render();
    }

 
    public function load_edit(Request $request)
    {
        $this->validate($request,[
            'city'=>'required|numeric|min:1,max:50',
        ]);

        //find state
        if($city=City::find($request->city)){
            $sub_regions=Sub_Region::lists('name','id');
        	$districts=District::lists('district_name','id');
            return view('adminpanel.tools.location.cities.micros.edit_city_form',compact('sub_regions','districts','city'))->render();
        }
        else{
            return response('city Not found',404);
        }
       
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
             $did=$request->district_id;
        $rule=[
            'sub_region_id'=>'exists:rto_subregions,id|min:1,max:50',
            'district_id'=>'required|bail|exists:districts,id|min:1,max:50',
           'name'=>'required',
        ];
        $this->validate($request,$rule);
         if(!City::where('name','LIKE','%'.$request->name.'%')->where('district_id',$request->district_id)->first()){
            //save state
            $city=new City;
            $city->name=$request->name;
            if(isset($request->sub_region_id) && $request->sub_region_id!='')
            $city->sub_region_id=$request->sub_region_id;
            $city->district_id=$request->district_id;
            if($city->save()){
               return $this->show_districts_result();
            }
            else{
                return response('Error in saving state',422);
            }
         }
         else{
               return response('Error in saving state',422);
         }
           

    }
    private function show_districts_result(){
          $cities=City::all();
        return view('adminpanel.tools.location.cities.micros.show_city_result',compact('cities'));
    }


    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request)
    {
        // dd($request->city);
    	/* $this->validate($request->city,[
            'sub_region_id'=>'required|exists:rto_subregions,id|min:1,max:50',
            'district_id'=>'required|exists:districts,id|min:1,max:50',
           'name'=>'required|unique:cities,name|min:1,max:50',
                  'city'=>'required',
        ]);*/
        

          // dd($request->all());
        //save state
        
        $city1=City::find($request->city['id']);
        // dd($city);
         $city1->name=$request->city['name'];
        $city1->sub_region_id=$request->city['sub_region_id'];
        $city1->district_id=$request->city['district_id'];
        if($city1->save()){
         $cities=City::all();  

        	
           return response()->json(['cities'=>$cities],200);
        }
        else{
            return response('Error in saving state',422);
        }


        //
    }


public function delete_city(Request $request)
{
    
    $city=City::find($request->city)->delete();
    $cities=City::all();
    return response()->json(['cities'=>$cities],200);
}


    public function AddCity(Request $request)
    {
        // dd($request->city['district_id']['id']);
        $city=new City;
        $city->name=$request->city['name'];
        $city->district_id=$request->city['district_id']['id'];
        $city->sub_region_id=$request->city['sub_region_id']['id'];
        $city->save();
        $cities=City::all();
        // dd($cities);
        return response()->json(['cities'=>$cities],200);
    }


    public function SearchResult(Request $request)
    {   
        // dd($request->district_id);
        $cities=City::where('district_id',$request->district_id)->get();

             // dd($cities);
        return response()->json(['cities'=>$cities],200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
        try{
            City::find($request->city)->delete();
             return $this->show_districts_result();
        }catch(\Exception $e){
            return $e.message();
        }
    }
}
