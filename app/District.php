<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	 protected $table = 'districts';
    //

	 public function state(){
	 	return $this->belongsTo(State::class,'id');
	 }
	 


	 public function getStateIdAttribute($value){

     if($state=\DB::table('states')->where('id',$value)->first())
     {
          return $state->name;
     }
     else
          return 'No State allocated';

	}

	public function getOperatingStatusAttribute($value)
	{
    	if($value==0)
    		return 'Not active';
    	else
    		return 'Active'; 
	}


	 // public static function GetStatus($status)
	 // {
	 // 	dd($status);

	 // 	if($status=0)
	 // 	{
	 // 		// $id="Not Active";
	 // 	}
	 // 	else
	 // 	{
	 // 		dd('1');
	 // 		// $id="Active";
	 // 	}
	 // 	return $id;
	 // }
}
