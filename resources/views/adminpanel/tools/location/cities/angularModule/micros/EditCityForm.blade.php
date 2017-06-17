<div class="modal" id="edit_form" style="padding-top: 150px;">
	<div class="col-lg-8 col-md-offset-2" >
		<span onclick="document.getElementById('edit_form').style.display='none'" class="close" title="Close Modal">X</span>
		<form  role="form" class="col-md-6 col-md-offset-3 form modal-content animate form vertical-form" style="padding:20px;" method="POST" id="city_edit_form" ng-submit="updateCityDetail()">
			<div class="form-group" style=" padding:10px; border:solid 2px gray; border-radius: 5px;">
					<h3 style="text-align: center;">Edit city Detail</h3>
			</div>
			<div class="form-group alert-warning"><%warning%></div>
				<div class="form-group">
					<label>Districts</label>
					<select ng-model="city.district_id" value="city.district_id"  ng-options="district.id as district.district_name for district in districts" id="rto_state_code" class="form-control" required="true">
					</select>
				</div>	
				<div class="form-group">
					<label>Sub-Regions</label>
						<select ng-model="city.sub_region_id"  value="sub_region.id" id="rto_state_code" class="form-control" ng-options="sub_region.id as sub_region.name for sub_region in sub_regions" required="true" placeholder="Select Sub region">
						</select>
				</div>
				<div class="form-group">
					<label>City Name</label>
					<input type="text" class="form-control" name="name"  ng-model="city.name" required="true" pattern="[a-zA-Z ]{1,50}">
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
						<input class="form-control" type="submit" name="" value="Submit">
						</div>
					</div>
					<div class="col-md-4">
						 <div class="form-group">
						<input class="form-control" type="button" name="" onclick="document.getElementById('edit_form').style.display='none';" value="cancel">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>