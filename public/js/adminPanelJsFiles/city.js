var myApp= angular.module("manageCity",['toaster', 'ngAnimate'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })

.controller("CityController", function ($scope,$http,toaster) {

/*$scope.districts=[];
$scope.cities=[];
$scope.sub_regions=[];*/

$scope.city={
	id:0,
	name:'',
	district_id:0,
	sub_region_id:0,
};
$scope.district={
	id:0,
	state_id:0,
	district_name:'',
	operating_status:'',

};
// $scope.district=district;
$scope.rowLimit="";
$scope.startRow=0;
var sub_region={};
$http.get("/Admin/Location/City/get-all-cities")
 	 .then(function(response) {
// console.log(response.data.cities);
      $scope.districts = response.data.districts;
      $scope.cities=response.data.cities;
      $scope.sub_regions=response.data.sub_regions;
      $scope.rowLimit=$scope.cities.length;
       // console.log($scope.sub_regions [0]);
 		$scope.checkData($scope.cities); 
  });
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
/*var getdistrict=function(id){

 	 };*/
$scope.SearchDistrict=1;
// $scope.city=city;
$scope.showModal=false;
$scope.showEditCityForm=function(id,name,district_id,sub_region_id)
{

	$scope.warning='';
document.getElementById('edit_form').style.display='block';
	for (var i = 0; i < $scope.districts.length; i++) {
		if($scope.districts[i].district_name==district_id)
			{
			$scope.district_id=$scope.districts[i].id;
			break;
			}
	}
	for (var i = 0; i < $scope.sub_regions.length; i++) {
		if($scope.sub_regions[i].name==sub_region_id)
			$scope.sub_region_id=$scope.sub_regions[i].id;
	}
$scope.city.id=id;
$scope.city.name=name;
$scope.city.district_id=$scope.district_id;
$scope.city.sub_region_id=$scope.sub_region_id;
	// console.log($scope.city);
};

$scope.searchCityByDistrict=function(district){
// console.log(district);
$http.post('/Admin/Location/City/search-city-by-district',{
  district_id:district,
}).then(function(response){
	// console.log(response.data);
	if(response.data.cities[0])
	$scope.cities=response.data.cities;
	else
		toaster.pop('error','No city available from selected district','');
});
};

$scope.showAddNewCityForm=function(){
	$scope.warning='';
	$scope.city={};
	document.getElementById('add_newcity_form').style.display='block';
}

$scope.addNewCity=function(){
	// console.log($scope.city);

	for (var i = 0; i < $scope.districts.length; i++) {
		if($scope.districts[i].id==$scope.city.district_id)
		{
			$scope.district_name=$scope.districts[i].name;
		}
	}


$scope.validate=true;
for (var i = 0; i < $scope.cities.length; i++) {
	if(angular.lowercase($scope.cities[i].name)==angular.lowercase($scope.city.name)
	 &&angular.lowercase($scope.cities[i].ditrict_id)==angular.lowercase($scope.district_name)
	 &&$scope.cities[i].id!=$scope.city.id)
		{
			$scope.warning='City already exist! ';
			// toastr.warning('fgh');
				toaster.pop('warning','Duplicate Entry','Data already exist!');
			$scope.validate=false;
		}
}
if($scope.validate){

	if($scope.city.district_id&&$scope.city.sub_region_id){
	$scope.warning='';
	document.getElementById('add_newcity_form').style.display='none';
	$http.post('/Admin/Location/City/add-new-city',{
		city:$scope.city,
	}).then(function(response){
		// console.log(response.data.cities);
		$scope.cities=response.data.cities;
		$scope.rowLimit=$scope.cities.length;
		$scope.checkData($scope.cities); 
		toaster.pop('success', "Added", "City added");
	});	
	}
	else
	{
		toaster.pop('warning','Empty fields','please fill the all fields!');
		$scope.warning="please fill the all fields!";	
	}
}
};


$scope.deleteCity=function(id){
	if(confirm('Deleted Date wil not be recoverd! Do you want delete it?')){
$http.post('/Admin/Location/City/delete-city',{
		city:id,
	}).then(function(response){
		$scope.cities=response.data.cities;
		$scope.checkData($scope.cities); 
		$scope.rowLimit=$scope.cities.length;
		toaster.pop('success', "Deleted", "City deleted successfully");
	});	
}
};

$scope.warning='';
$scope.updateCityDetail=function(){
/*$scope.district_id=$scope.city.district_id.id;
$scope.sub_region_id=$scope.city.sub_region_id.id;*/
for (var i = 0; i < $scope.districts.length; i++) {
		if($scope.districts[i].id==$scope.city.district_id)
		{
			$scope.district_name=$scope.districts[i].name;
		}
	}


$scope.validate=true;
for (var i = 0; i < $scope.cities.length; i++) {
	if(angular.lowercase($scope.cities[i].name)==angular.lowercase($scope.city.name)
	 &&angular.lowercase($scope.cities[i].ditrict_id)==angular.lowercase($scope.district_name)
	 &&$scope.cities[i].id!=$scope.city.id)
		{
			$scope.warning='City already exist! ';
			// toastr.warning('fgh');
			toaster.pop('warning','Duplicate Entry','Data already exist!');	
			$scope.validate=false;
		}
}
if($scope.validate){


if ($scope.city.district_id && $scope.city.sub_region_id) {
$scope.warning='';

document.getElementById('edit_form').style.display='none';

// $scope.city.district_id=$scope.district_id;
// $scope.city.sub_region_id=$scope.sub_region_id;
// 	// console.log($scope.city);

// confirm('aaesrdtu');
$http.post("/Admin/Location/City/update-city-detail",{
 		 city:$scope.city,
		// console.log($scope.city);	
 	})
 	 .then(function(response) {
      $scope.cities = response.data.cities;
      $scope.checkData($scope.cities); 
      $scope.rowLimit=$scope.cities.length;
      toaster.pop('success','Edited','City edited successfully!');
  });
}
else{
	toaster.pop('warning','Empty fields','please fill the all fields!');
	$scope.warning="please fill the all fields!";
}
}
};


// ----------------------------------////////////---------sorting------////////////////-------------------?/////////////

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

});

