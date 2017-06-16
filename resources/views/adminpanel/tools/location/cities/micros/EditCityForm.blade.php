<div class="modal" id="edit_form">
<div class="col-lg-8 col-md-offset-2" style="position:absolute; top:100px; ">
<span onclick="document.getElementById('edit_form').style.display='none'" class="close" title="Close Modal">X</span>
<form  role="form" class="col-md-3 col-md-offset-3 form modal-content animate form vertical-form" style="padding:20px;	width: 500px;" method="POST" id="city_edit_form" ng-submit="Update()">
<div class="form-group" style=" padding:10px; border:solid 2px gray; border-radius: 5px;">
<h3 style="text-align: center;">Edit city Detail</h3>
</div>
<div class="form-group">

	<label>Districts</label>
	<select ng-model="city.district_id" id="rto_state_code" class="form-control" required="true">
	@foreach($districts as $district)
		<option value="{{$district->id}}">{{$district->district_name}}</option>
	@endforeach
	</select>
</div>	
<div class="form-group">
			<label>Sub-Regions</label>
				<select ng-model="city.sub_region_id" id="rto_state_code" class="form-control" required="true" placeholder="Select Sub region">
					@foreach($sub_regions as $sub_region)
						<option value="{{$sub_region->id}}">{{$sub_region->name}}</option>
					@endforeach
				</select>
</div>
<div class="form-group">
			<label>City Name</label>
			<input type="text" class="form-control" name="name"  ng-model="city.name" >
			<div><% city.name %></div>
</div>
<div></div>
<div class="form-group">
<input type="button" name="" onclick="document.getElementById('edit_form').style.display='none';" value="cancel">
<input type="submit" name="" ng-click="" value="Submit">
</div>
</form>
</div>
</div>