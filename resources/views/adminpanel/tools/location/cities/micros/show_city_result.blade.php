@if(count($cities))
	<div class="table-responsive">
		
	<table id="city_result_table" class="table table-striped table-bordered">
		<thead>
			<th>id</th>
			
				<th>District</th>
					<th>Sub Region</th>
			<th>Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		@foreach($cities as $city)
			<tr>
				<td>{{$city->id}}</td>
				<td id="District">{{$city->get_district()}}</td>
				<td>{{$city->get_sub_region()}}</td>
				<td>{{$city->name}}</td>
				<td><button class="edit btn btn-primary" id="show_city_form" ng-click="Edit_city_form('{{$city->id}}','{{$city->name}}','{{$city->district_id}}','{{$city->sub_region_id}}')">Edit</button></td>
				<td><button class="edit btn btn-danger" onclick="delete_district({{$city->id}})">Delete</button></td>				
			</tr>

		@endforeach
	</table>
	<div>
		<!-- @include('adminpanel.tools.location.cities.micros.EditCityForm') -->
	</div>
		</div>

@endif