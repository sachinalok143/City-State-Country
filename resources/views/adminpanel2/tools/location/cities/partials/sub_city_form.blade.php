

		<div class="form-group">
			<label>Districts</label>
			<?php $value_capital=""; ?>
			@if(isset($city->district_id))
				<?php $value_capital=$city->district_id; ?>
			@endif
			{!! Form::select('district_id',$districts,$value_capital,['id'=>'rto_state_code','class'=>'form-control','required'=>'true' ]);    !!}
		</div>
		<div class="form-group">
			<label>Sub-Regions</label>
			<?php $value_sub_region=""; ?>
			@if(isset($city->sub_region_id))
				<?php $value_sub_region=$city->district_id; ?>
			@endif
			{!! Form::select('sub_region_id',$sub_regions,$value_sub_region,['id'=>'rto_state_code','class'=>'form-control','placeholder'=>'Select Sub region']);!!}
		</div>
		<div class="form-group">
			<label>City Name</label>
			<?php $value_name=""; ?>
			@if(isset($city->name))
				<?php $value_name=$city->name; ?>
			@endif
			<input type="text" class="form-control" name="name" value="{{$value_name}}" >
		</div>