<form role="form" class="col-md-3 col-md-offset-3" method="post" id="city_edit_form"> 
	<h4>Update District</h4>
	{{csrf_field()}}
	<input type="hidden" name="city" value="{{$city->id}}">
@include('adminpanel.tools.location.cities.partials.sub_city_form')
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
</form>

