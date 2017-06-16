
<div class="row">
 	<div class="col-md-12">
 	<div class="col-md-3">
 		<label>Rows to display:</label> 
		<input  type="number" min="0",  step="1" ng-model="rowLimit" name="" class="form-control">   
	</div>
	<div class="col-md-3">
		<label>Starting Row:</label>  
		<input type="number" min="0", max="5" step="1" ng-model="startRow" name="" class="form-control">
		  </div>
		  <div class="col-md-3">
		  <label>Search:</label>
        <input type="text" ng-model="search1" name="" class="form-control" placeholder="Search By Any Keywords">
 	</div>
 	</div>
</div>
	<div class="table-responsive">
		
	<table id="city_result_table" class="table table-striped table-bordered">
		<thead>
			<th ng-click="sortData('id')">
			id  <div ng-class="getSortClass('id')"></div>
			</th>
					<th ng-click="sortData('sub_region_id')">
					Sub Region <div ng-class="getSortClass('sub_region_id')"></div>
					</th>
					<th ng-click="sortData('district_id')">
				District <div ng-class="getSortClass('district_id')"></div>
				</th>
			<th ng-click="sortData('name')">
			City <div ng-class="getSortClass('name')"></div>
			</th>
			<th colspan="2" style="text-align: center;">Actions</th>
			
		</thead>

        <br><br>
			<tr ng-repeat="city in cities|filter:search1|limitTo:rowLimit:startRow|orderBy:sortColumn:reverseSort">
				<td><%city.id%></td>
				<td><%city.sub_region_id%></td>
				<td id="District"><%city.district_id%></td>
				<td><%city.name%></td>	
				<td><button class="edit btn btn-primary" id="show_city_form" ng-click="Edit_city_form(city.id,city.name,city.district_id,city.sub_region_id);">Edit</button></td>
				<td><button class="edit btn btn-danger" ng-click="delete_city(city.id)">Delete</button></td>				
			</tr>

			
	</table>
	<div>
		<!-- @include('adminpanel1.tools.location.cities.micros.EditCityForm') -->
	</div>
		</div>

