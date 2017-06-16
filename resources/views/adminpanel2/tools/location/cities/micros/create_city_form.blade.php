<form role="form" class="col-md-3 col-md-offset-4 well" method="post" id="city_create_form"> 
	<h3>Create city</h3>
	{{csrf_field()}}
		@include('adminpanel2.tools.location.cities.partials.sub_city_form')

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
</form>

