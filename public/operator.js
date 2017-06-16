var myApp= angular
.module("Operator",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("OperatorController",  function ($scope,$http) {
	$scope.country={

		id:102,
	};

	$scope.state={
		
		id:0,
	};
	$scope.district={
		
		id:0,
	};

	


	$http.get("/operators/all")
 	 .then(function(response) {
 	 	$scope.operators=response.data.operators;
      // $scope.districts = response.data.districts;
      // $scope.cities=response.data.cities;
      // $scope.sub_regions=response.data.sub_regions;
       // console.log($scope.sub_regions [0]);
       $scope.countries=response.data.countries;
       // console.log($scope.countries[101].name);
  });

$scope.Alldistricts=function(id){
 $http.post('/getdistricts/'+id,{
  district_id:$scope.district.id,
  country_id:$scope.country.id,
  state_id:$scope.state.id
 })
 .then(function(response){
 	$scope.tempdistricts=response.data.districts;
 	if($scope.tempdistricts){
 		$scope.districts=response.data.districts;
 	}
 	else
  	 	{
  	 		console.log('No ditricts available with selected state!');
  	 	}
 });
};

$scope.Allstates=function(id){
 	 	// alert('fghjk');
 	 $http.post('/getstates/'+id,{
    district_id:$scope.district.id,
    country_id:$scope.country.id,
    state_id:$scope.state.id
   })
 	 	// alert($scope.country.id);
 	 .then(function(response){
  	 	$scope.tempstates=response.data.states;
  	 	if($scope.tempstates)
  	 		{
  	 			$scope.states=response.data.states;
  	 		}
  	 	else
  	 	{
  	 		console.log('No state available with selected country!');
  	 	}
 	 });


 	 // console.log($scope.country.id);
 	 // console.log('/getstates/'+$scope.country.id);
 	};
$scope.limit=0;
$scope.order=false;

//=====================================Sorting=====================================////////////////===================


$scope.reverseSort=false;
$scope.sortColumn="name";
$scope.sortData=function(column){
  alert();
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