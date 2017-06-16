<div class="modal" id="add_newstate_form" style="padding-top: 150px;">
<div  class="col-lg-8 col-md-offset-2">
<span onclick="document.getElementById('add_newstate_form').style.display='none'" class="close" title="Close Modal">X</span>
<form  role="form" class="col-md-6 col-md-offset-3 form modal-content animate form vertical-form" style="padding:20px;" method="POST" id="add_newstate_form" ng-submit="Add_state_form()">
<div class="form-group" style=" padding:10px; border:solid 2px gray; border-radius: 5px;">
<h3 style="text-align: center;">Add New state</h3>
</div>
<div class="form-group alert-warning">
	<%warning%>
</div>
<div class="form-group">

	<label>Country</label>
	<select ng-model="state.country_id" value="state.country_id"  ng-options="country.id as country.name for country in countries" id="rto_state_code" class="form-control" required="true">
	<option value="" deselected>Select Country</option>
	</select>
	
</div>	
<div class="form-group">
			<label>state Name</label>
			<input type="text" class="form-control" name="name"  ng-model="state.name" required="true" pattern="[a-zA-Z ]{1,50}">
</div>
<div class="form-group">
			<label>Capital</label>
			<input type="text" ng-model="state.Capital" class="form-control"
required="true" name="Capital" pattern="[a-zA-Z ]{1,50}">
				
</div>
<div class="form-group">
			<label>RTO State Code</label>
			<input type="text" ng-model="state.rto_state_code" class="form-control"
 required="true" name="rto_state_code" pattern="[A-Z]{2}">
				
</div>

			


<div></div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
		<input class="form-control" type="submit" name="" value="Submit">
		</div>
	</div>
	<div class="col-md-4">
		 <div class="form-group">
		<input class="form-control" type="button" name="" onclick="document.getElementById('add_newstate_form').style.display='none';" value="cancel">
		</div>
	</div>
</form>
</div>
</div>