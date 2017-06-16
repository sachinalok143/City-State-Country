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
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>type</th>
			<th>company_id</th>
			<th>hostpital_id</th>
			<th>operator_name</th>
			<th>operator_name_lastname</th>
			<th>number_of_ambulances</th>
			<th>operator_status</th>
			<th>operator_services</th>
			<th>established_date</th>
			<th>government_clearance</th>
			<th>background_verification</th>
			<th>address_line_1</th>
			<th>address_line_2</th>
			<th>country</th>
			<th>state</th>
			<th>district</th>
			<th>city</th>
			<th>pin_code</th>
			<th>added_by_user</th>
			<th>updated_bylanguages_spoken</th>
			<th>registration_type </th>
			<th>languages_spoken</th>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="operator in operators">
				<!-- <%operators%> -->
			<td><%operator.id%></td>
			<td><%operator.type%></td>
			<td><%operator.company_id%></td>
			<td><%operator.hostpital_id%></td>
			<td><%operator.proprietar_name%></td>
			<td><%operator.proprietar_name_lastname%></td>
			<td><%operator.number_of_ambulances%></td>
			<td><%operator.operator_status%></td>
			<td><%operator.operator_services%></td>
			<td><%operator.established_date%></td>
			<td><%operator.government_clearance%></td>
			<td><%operator.background_verification%></td>
			<td><%operator.address_line_1%></td>
			<td><%operator.address_line_2%></td>
			<td><%operator.country%></td>
			<td><%operator.state%></td>
			<td><%operator.district%></td>
			<td><%operator.city%></td>
			<td><%operator.pin_code %></td>
			<td><%operator.added_by_user%></td>
			<td><%operator.updated_by%></td>
			<td><%operator.registration_type%></td>
			<td><%operator.languages_spoken%></td>
		</tr>
	</tbody>
</table>
</body>
</html>