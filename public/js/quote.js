var myApp= angular
.module("myModule",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
.controller("myController", function ($scope,$http	) {
	
	 $scope.quote={
	 	content: '',
	 };
	$http.get("/api/quote")
 	 .then(function(response) {
      $scope.quotes = response.data;
  });

 $scope.Delete=function(id){
 	if(confirm("Dou Want To Delete This Qoute")){
 	$http.delete("/api/quote/"+id)
 	 .then(function(response) {

      $scope.quotes = response.data;
  });
 }
 }


 $scope.Edit=function(id){
 	$scope.content=content[0].value;
 	$http.put("/api/quote/"+id,{

 		contents:$scope.content,
 	})
 	 .then(function(response) {
 	 	
      $scope.quotes = response.data;
  });
 
 }


 $scope.Add=function(){
 	
 	$http.post("/api/quote/",{

 		 content:$scope.quote.content,
 	})
 	 .then(function(response) {
 	 	
      $scope.quotes = response.data;
  });
 
 }



});