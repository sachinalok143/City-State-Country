<!DOCTYPE html>
<html>
<head>
	<title>
		Operators
	</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script  type="text/javascript" src="{{url('operator.js')}}"></script>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">


	<script type="text/javascript">
		
	</script>
</head>
<body ng-app="Operator" ng-controller="OperatorController">

<div class="alert-warning" ng-if="error"><%error%></div>
<!-- <select ng-options="<%countries%>" ng-model="country"></select> -->
 <select ng-init="country.name"  ng-model="country.id" ng-change="Allstates(country.id)" value="country.id"    ng-options="country.id as country.name for country in countries"></select>

 <select ng-init="state.name"  ng-model="state.id" value="state.id" ng-change="Alldistricts(state.id)"    ng-options="state.id as state.name for state in states"></select>
 <select ng-init="district.district_name"  ng-model="district.id" value="district.id" ng-options="district.id as district.district_name for district in districts"></select>
 <select ng-model="limit">
 	<option ng-value="0">All</option>
 	<option ng-value="10">10</option>
 	<option ng-value="25">25</option>
 	<option ng-value="50">50</option>
 	<option ng-value="100">100</option>
 </select>
 <select ng-model="order">
 	<option ng-value="false">Acsending</option>
 	<option ng-value="true">Decending</option>
 </select>
 <!-- <select name="repeatSelect" 
   id="repeatSelect" 
   ng-model="repeatSelect"
   ng-init=" repeatSelect = countries[0].id"  
   ng-options="option.id as option.name for option in countries">           -->
</select>
</body>
</html>