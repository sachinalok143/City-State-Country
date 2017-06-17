var myApp= angular
.module("manageStates",['toaster', 'ngAnimate'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("StateController", function ($scope,$http,toaster) {
		$scope.reverseSort=false;
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
		country_id:'',
		Capital:'',
		rto_state_code:'',
		};

$scope.startRow=0;
$scope.rowLimit='';
	$http.get("/Admin/Location/State/get-all-states")
 	 .then(function(response) {
      $scope.countries = response.data.countries;
      $scope.states=response.data.states;
      $scope.checkData($scope.states);
      // console.log($scope.states);
$scope.rowLimit=$scope.states.length;	
      // $scope.sub_regions=response.data.sub_regions;
       // console.log($scope.sub_regions [0]);
     $scope.checkData($scope.states);
  });
$scope.showEditStateForm=function(id,name,country_id,Capital,rto_state_code)
{
	$scope.warning='';


document.getElementById('edit_form').style.display='block';
	for (var i = 0; i < $scope.countries.length; i++) {
		if($scope.countries[i].name==country_id)
			$scope.country_id=$scope.countries[i].id;
	}
$scope.state.id=id;
// console.log(rto_state_code);
$scope.state.name=name;
$scope.state.country_id=$scope.country_id;
$scope.state.Capital=Capital;
$scope.state.rto_state_code=rto_state_code;
	// console.log($scope.district);
};

$scope.warning='';
$scope.country_name='';



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



$scope.updateDtateDetail=function(){
	// console.log($scope.state);
	for (var i = 0; i < $scope.countries.length; i++) {
		if($scope.countries[i].id==$scope.state.country_id)
		{
			$scope.country_name=$scope.countries[i].name;
		}
	}
		$scope.reverseSort=false;
$scope.validate=true;
for (var i = 0; i < $scope.states.length; i++) {
	if(angular.lowercase($scope.states[i].name)==angular.lowercase($scope.state.name)
	 &&angular.lowercase($scope.states[i].country_id)==angular.lowercase($scope.country_name)
	 &&$scope.states[i].id!=$scope.state.id)
		{
			$scope.warning='State is already exist! ';
			toaster.pop('warning','','State is already exist!');
			$scope.validate=false;
		}
}
if($scope.validate){
if ( $scope.state.country_id&&$scope.validate) {	
$scope.warning='';
// console.log($scope.state);


document.getElementById('edit_form').style.display='none';
$http.post("/Admin/Location/State/update-state-detail",{
 		 state:$scope.state,
		// console.log($scope.city);	
 	})
 	 .then(function(response) {
 	 	
      $scope.states = response.data.states;
      $scope.checkData($scope.states);
      toaster.pop('success','','Edited data of State saved!');
  });
}
else{
	$scope.warning="Please fill the all fields!";
	toaster.pop('warning','','Please fill the all fields!');
}
}
};

$scope.deleteState =function(id){
	
	if(confirm('Deleted data will never recovered! Do you want delete it?')){
$http.post('/Admin/Location/State/delete-state',{
		state:id,
	}).then(function(response){
		$scope.states=response.data.states;
		$scope.checkData($scope.states);
		toaster.pop('success','','State successfully deleted');
	});
}
};

$scope.showAddNewStateForm=function(){
	$scope.warning='';
	$scope.state={};
	document.getElementById('add_newstate_form').style.display='block';
};

$scope.addNewState=function(){
	for (var i = 0; i < $scope.countries.length; i++) {
			if($scope.countries[i].id==$scope.state.country_id)
			{
				$scope.country_name=$scope.countries[i].name;
			}
		}
	$scope.reverseSort=false;
	$scope.validate=true;
	for (var i = 0; i < $scope.states.length; i++) {
		if(angular.lowercase($scope.states[i].name)==angular.lowercase($scope.state.name)
		 &&angular.lowercase($scope.states[i].country_id)==angular.lowercase($scope.country_name)
		 &&$scope.states[i].id!=$scope.state.id)
			{
				$scope.warning='State is already exist! ';
				// toastr.warning('fgh');
				toaster.pop('warning','','State is already exist! ');
				$scope.validate=false;
			}
	}
	if($scope.validate){
		if($scope.state.country_id){
				$scope.reverseSort=false;
		$scope.warning='';
		document.getElementById('add_newstate_form').style.display='none';
		$http.post('/Admin/Location/State/add-state',{
			state:$scope.state,
		}).then(function(response){
			$scope.states=response.data.states;
			$scope.checkData($scope.states);
			toaster.pop('success','','State added successfully! ');
		});	
	}
	else
	{
	$scope.warning="Please fill the all fields!";	
	toaster.pop('warning','Empty fields','please fill the all fields! ');
	}
	}
};
/*
$scope.GetStatus=function(id){
if(id==1){
 return 'Active';
}
else{
	return 'Not Active';

}
};

$scope.GetState=function(id){
	// alert('/Admin/Location/State/GetState/'+id);
	
	for (var i = 0; i < $scope.states.length; i++) {
		if($scope.states[i].id==id){
			return $scope.states[i].name;
		}
	}
};
	*/
$scope.SearchByCountry=function(){

	// console.log($scope.state.id);
	$http.post('/Admin/Location/State/search-state-by-country',{
		country:$scope.state.country_id,
	}).then(function(response){
		
		if(!response.data.states[0]){
			toaster.pop('error','No state available from selected country','');
		}
		else{
		$scope.states=response.data.states;	
		}
		// $scope.checkData($scope.states);
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

});