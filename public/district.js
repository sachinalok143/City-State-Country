var myApp= angular
.module("Form",['toaster', 'ngAnimate'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("CityController", function ($scope,$http,toaster) {
	$scope.district={
		id:0,
		state_id:0,
		district_name:'',
		operating_status:0,
	};
	$scope.state={
		id:0,
		name:'',
		country_id:0,
	};
	$scope.state={

		id:0,
		name:'',
	};
$scope.rowLimit="";
$scope.startRow=0;

	$http.get("/Admin/Location/City/districts")
 	 .then(function(response) {
      $scope.districts = response.data.districts;
      $scope.states=response.data.states;
      $scope.checkData(response.data.districts);
      // console.log($scope.states);
      $scope.rowLimit=$scope.districts.length;
      // $scope.sub_regions=response.data.sub_regions;
       // console.log($scope.sub_regions [0]);
  });
 	$scope.Edit_district_form=function(id,name,state_id,operating_status)
{
	$scope.warning='';
document.getElementById('edit_form').style.display='block';
	for (var i = 0; i < $scope.states.length; i++) {
		if($scope.states[i].name==state_id){
			$scope.state_id=$scope.states[i].id;
			break;
		}
	}
	if (operating_status=='Active') {
		$scope.operating_status="1";
	}
	else
		$scope.operating_status="0";

$scope.district.id=id;
$scope.district.district_name=name;
$scope.district.state_id=$scope.state_id;
$scope.district.operating_status=$scope.operating_status;
	// console.log($scope.district);
};

$scope.warning='';

$scope.checkData=function(cities){
if(cities[0])
{
	document.getElementById('advanced_search').style.display='block';
	document.getElementById('page-city-content').style.display='block';
	document.getElementById('Error').style.display='none';
}
else
{
	document.getElementById('advanced_search').style.display='none';
	document.getElementById('page-city-content').style.display='none';
	document.getElementById('Error').style.display='block';
}
};

$scope.Update=function(){

for (var i = 0; i < $scope.states.length; i++) {
		if($scope.states[i].id==$scope.district.state_id)
		{
			$scope.state_name=$scope.states[i].name;
		}
	}


$scope.validate=true;
for (var i = 0; i < $scope.districts.length; i++) {
	if(angular.lowercase($scope.districts[i].district_name)==angular.lowercase($scope.district.district_name)
	 &&angular.lowercase($scope.districts[i].state_id)==angular.lowercase($scope.state_name)
	 &&$scope.districts[i].id!=$scope.district.id)
		{
			$scope.warning='District is already exist! ';
			// toastr.warning('fgh');
			toaster.pop('warning','Duplicate Entry','District is already exist!');
			$scope.validate=false;
		}
}
if($scope.validate){
// console.log($scope.district);
if ( $scope.district.state_id) {
$scope.warning='';

document.getElementById('edit_form').style.display='none';
$http.post("/Admin/Location/City/updateditrict",{
 		 district:$scope.district,
		// console.log($scope.city);	
 	})
 	 .then(function(response) {
 	 	
      $scope.districts = response.data.districts;
      toaster.pop('success','Edited successfully' ,'new edited data saved');
  });
}
else{
	$scope.warning="please fill the all fields!";
	toaster.pop('warning','Empty fields' ,'Please fill the all fields!');
}
}
};
$scope.add_newdistrict_form=function(){
	$scope.warning='';
	$scope.district={};
	document.getElementById('add_newdistrict_form').style.display='block';
};

$scope.delete_district =function(id){
	
	if(confirm('Deleted data will never recovered! Do you want delete it?')){
$http.post('/Admin/Location/City/delete_district',{
		district:id,
	}).then(function(response){
		toaster.pop('success','Deleted','District deleted successfully!');
		$scope.districts=response.data.districts;
		$scope.checkData($scope.districts);
	});	
}
};

$scope.Add_district_form=function(){

for (var i = 0; i < $scope.states.length; i++) {
		if($scope.states[i].id==$scope.district.state_id)
		{
			$scope.state_name=$scope.states[i].name;
		}
	}


$scope.validate=true;
for (var i = 0; i < $scope.districts.length; i++) {
	if(angular.lowercase($scope.districts[i].district_name)==angular.lowercase($scope.district.district_name)
	 &&angular.lowercase($scope.districts[i].state_id)==angular.lowercase($scope.state_name)
	 &&$scope.districts[i].id!=$scope.district.id)
		{
			$scope.warning='District is already exist! ';
			// toastr.warning('fgh');
			toaster.pop('warning','Duplicate Entry','District is already exist!');
			$scope.validate=false;
		}
}
if($scope.validate){
	if($scope.district.state_id){
	$scope.warning='';
	document.getElementById('add_newdistrict_form').style.display='none';
	$http.post('/Admin/Location/City/AddDistrict',{
		district:$scope.district,
	}).then(function(response){
		$scope.districts=response.data.districts;
		$scope.checkData($scope.districts);
		toaster.pop('success','District Added','New district added successfully!');
	});	
}
else
{
$scope.warning="please fill the all fields!";
toaster.pop('warning','Empty fields','please fill the all fields!');	
}

}
};

$scope.GetStatus=function(id){
if(id==1){
 return 'Active';
}
else{
	return 'Not Active';

}
};

$scope.GetState=function(id){
	// alert('/Admin/Location/City/GetState/'+id);
	
	for (var i = 0; i < $scope.states.length; i++) {
		if($scope.states[i].id==id){
			return $scope.states[i].name;
		}
	}
};
	
$scope.search=function(){

	// console.log($scope.state.id);
	$http.post('/Admin/Location/City/seachState',{
		state:$scope.state.id,
	}).then(function(response){
		if(response.data.districts[0]){
		$scope.districts=response.data.districts;
	}
	else{
		toaster.pop('error','No district available from selected state','');
	}
	});	

};

//=======================sotying=============/////////=================//=//////////////////=/=/==========
$scope.reverseSort=false;
$scope.sortColumn="id";
$scope.sortData=function(column){
  // alert('fghhjjkkl');
  $scope.reverseSort=($scope.sortColumn==column) ? !$scope.reverseSort :false;
  $scope.sortColumn=column;
};

$scope.getSortClass=function(column){
  if($scope.sortColumn==column){
    return $scope.reverseSort ? 'arrow-down':'arrow-up' ;
  }
  else
  {
    return 'arrow-all';
  }
};
// 
});