
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



<div class="row">
	<div class="table-responsive">
		
	<table id="state_result_table" class="table table-striped table-bordered">
		<thead>
		<tr>
		<th ng-click="sortData('id')" >
			id <div ng-class="getSortClass('id')"></div>
		</th>
			
		<th ng-click="sortData('country_id')">
				Country<div ng-class="getSortClass('country_id')"></div>
		</th>
		<th ng-click="sortData('name')">
			State<div ng-class="getSortClass('name')"></div>
		</th>
		<th ng-click="sortData('Capital')">
				Capital<div ng-class="getSortClass('Capital')"></div>
		</th>
		
		<th ng-click="sortData('rto_state_code')">
			RTO State Code<div ng-class="getSortClass('rto_state_code')"></div>
		</th>
			<th colspan="2" style="text-align: center;">Actions</th>
			</tr>

		</thead>
		 
        <br><br>
			<tr ng-repeat="state in states|filter:search1|limitTo:rowLimit:startRow|orderBy:sortColumn:reverseSort">
				<td><%state.id%></td>
				<td ><%state.country_id%></td>
				<td><%state.name%></td>
				<td><%state.Capital%></td>
				<td><%state.rto_state_code%></td>
				<td><button class="edit btn btn-primary" id="show_state_form" ng-click="Edit_state_form(state.id,state.name,state.country_id,state.Capital,state.rto_state_code);">Edit</button></td>
				<td><button class="edit btn btn-danger" ng-click="delete_state(state.id)">Delete</button></td>				
			</tr>
	</table>
	<div>
		
	</div>
		</div>
</div>

	

