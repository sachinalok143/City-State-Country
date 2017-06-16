var myApp= angular
.module("Form",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("Edit_city_form", function ($scope) {


var city={
	id:0,
	name:'',
	district_id:0,
	sub_region_id:0,
};
$scope.city=city;

$scope.Edit_city_form=function(id,name,district_id,sub_region_id)
{
$scope.city.id=id;
$scope.city.name=name;
$scope.city.district_id=district_id;
$scope.city.sub_region_id=sub_region_id;
};


});

