<?php

namespace App;
use App\City;
use Illuminate\Database\Eloquent\Model;

use App\District;

class City extends Model
{
//Hello
     protected $table = 'cities';
     public function operators()
     {
          return $this->hasMany('App\Operator','city');
          # code...
     }


     public function temp_operators()
     {
          return $this->hasMany('App\Operator_Temp_Detail','city');
          # code...
     }

     public function get_district()
     {
          
          $s_id=$this->district_id;


          if($s_id=='' || $s_id==0)
          {
               return 'No District allocated';  
          }
          else
          {
               $sub_region=District::find($s_id);
                    if($sub_region)
                    {
                         $sub_region_name=$sub_region->district_name;
                         return $sub_region_name;
                    }
                    else
                    {
                         return 'No District allocated';  
                    }
                    
               
          }
     


     }


public function getDistrictIdAttribute($value){
     if(District::find($value)){
     return District::find($value)->district_name;
     }
     else
     {
          return 'No district allocated';
     }
}

/*public function setDistrictIdAttribute($vale){
     return District::find($value)->id;
}*/
public function getSubRegionIdAttribute($value){
     if($r=\DB::table('rto_subregions')->where('id',$value)->first())
     return $r->name;
     else
          return 'No Sub Region allocated';
}

public function get_sub_region()
     {
          
          $s_id=$this->sub_region_id;

          if($s_id=='' || $s_id==0)
          {
               return 'No Sub region allocated';  
          }
          else
          {
               $sub_region=\DB::table('rto_subregions')->find($s_id);
                    if($sub_region)
                    {
                         $sub_region_name=$sub_region->name;
                         return $sub_region_name;
                    }
                    else
                    {
                         return 'No Sub region allocated';  
                    }
                    
               
          }
     


     }
}
