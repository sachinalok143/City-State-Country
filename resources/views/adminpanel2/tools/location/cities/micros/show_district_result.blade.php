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
		
	<table id="district_result_table" class="table table-striped table-bordered">
		<thead>
			<tr>
			<th ng-click="sortData('id')" >
				id <div ng-class="getSortClass('id')"></div>
			</th>
				
			<th ng-click="sortData('state_id')">
					State<div ng-class="getSortClass('state_id')"></div>
			</th>
			<th ng-click="sortData('operating_status')">
					Operating Status <div ng-class="getSortClass('operating_status')"></div>

			</th>
			<th ng-click="sortData('name')">
				District<div ng-class="getSortClass('name')"></div>
			</th>
				<th colspan="2" style="text-align: center;">Actions</th>
				</tr>
		</thead>
		<br><br>
		<tr ng-repeat="district in districts|filter:search1|limitTo:rowLimit:startRow|orderBy:sortColumn:reverseSort">
			<td><%district.id%></td>
			<td id="District"><%district.state_id%></td>
			<td><%district.operating_status%></td>
			<td><%district.district_name%></td>
			<td><button class="edit btn btn-primary" id="show_district_form" ng-click="Edit_district_form(district.id,district.district_name,district.state_id,district.operating_status);">Edit</button></td>
			<td><button class="edit btn btn-danger" ng-click="delete_district(district.id)">Delete</button></td>				
		</tr>

			
	</table>
	<div>
		
	</div>
		</div>

