<!DOCTYPE html>
<html>
<head>
	<title>
		l;kdfghhjkk
	</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script  type="text/javascript" src="{{url('form.js')}}"></script>
<script type="text/javascript" src="{{url('js/angular.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div ng-app="Form" ng-controller="CityController">

<input type="text" ng-model="message" style="color: red;" >
        <hr>
        <h1 class="table striped-table">Hello <%message%>!</h1>

</div>


</body>
</html>