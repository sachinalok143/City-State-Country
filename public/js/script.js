/// <reference path="angular.min.js" />


var myApp= angular
.module("myModule",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("myController", function ($scope) {
					//object created
					var country={
						Name:'India',
						Capital:'Delhi',
						Logo:'images/seven.png',
					};

	$scope.message="my first angularjs module";	

	$scope.name='sachin';
	$scope.sort="name";
	$scope.reverseSort=false;
	$scope.sortData=function(column){
		$scope.reverseSort=($scope.sort==column)? !$scope.reverseSort :false;
		$scope.sort=column;
	};
	$scope.getSortClass=function(column){
		if($scope.sort==column){
		return $scope.reverseSort ?'arrow-down' : 'arrow-up'	 
		}
		return '';
	};

	$scope.array=
	[
		{
			element:[
			{name:'sachin', email:'sachin@gmail.com',Sellary:45000, DOB:new Date("July 15,1996")},
			{name:'alok' ,email:'alok@gmail.com',Sellary:45001, DOB:new Date("July 15,1996")},
			{name:'rohit', email:'amit@gmail.com',Sellary:45002, DOB:new Date("July 15,1996")},
			{name:'pinku', email:'amit@gmail.com',Sellary:45003, DOB:new Date("July 15,1996")},
			{name:'lokesh', email:'amit@gmail.com',Sellary:45004, DOB:new Date("July 15,1996")}
			]

		},

		{
			element:[
			{ name:'sachin', email:'sachin@gmail.com',Sellary:45009, DOB:new Date("July 15,1996")},
			{name:'alok' ,email:'alok@gmail.com',Sellary:45008, DOB:new Date("July 15,1996")},
			{name:'amit', email:'amit@gmail.com',Sellary:45007, DOB:new Date("July 15,1996")},
			{name:'amit', email:'amit@gmail.com',Sellary:45006, DOB:new Date("July 15,1996")},
			{name:'amit', email:'amit@gmail.com',Sellary:45005, DOB:new Date("July 15,1996")}
			]
		}
	];




$scope.rowLimit="";
$scope.startRow=1;


	$scope.country=country;
	})	

	.controller("newController",function($scope){
		$scope.technologies=[
			{ name:"C", like: 0, dislike: 0},
			{ name:"C#", like: 0, dislike: 0},
			{ name:"ASP.Net", like: 0, dislike: 0},
			{ name:"SQL Server", like: 0, dislike: 0},

	];

	$scope.IncrementLikes=function(technologies){
		technologies.like++;
	};

	$scope.IncrementDislikes=function(technologies){
		technologies.dislike++;
	};
	})

	;

