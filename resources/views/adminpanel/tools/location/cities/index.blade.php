<div ng-app="Form" ng-controller="CityController">
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script  type="text/javascript" src="{{url('form.js')}}"></script>
<script type="text/javascript" src="{{url('js/angular.js')}}"></script>
</head>
@extends('adminpanel.layout.app') 
@section('your_css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('content')
<section class="content-header">
      <h1>
       Manage City
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>City</li>
      </ol>
    </section> 
    <!-- Main content -->
    <div class="container">
    <div class="form" style="color: red;padding: 20px;">
        
       <form id="advanced_search" method="POST">
        <!-- {{csrf_field()}} -->
        <form id="advanced_search" method="POST" ng-submit="search(SearchDistrict)">
        <!-- {{csrf_field()}} -->
        <select  data-ng-model="SearchDistrict" value="district.id" data-ng-options="district.district_name for district in districts">
        
        </select>
        <input type="submit"  name="" value="Search">
        
        </form>
            <!-- {!! Form::select('district_id',$districts, null, array('multiple' => false));!!}
            {!! Form::submit('Search');!!}`
        </form>
         -->
    </div>
</div>

    <section class="content"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button onclick="load_create()" class="btn btn-success btn-sm pull-right"><span class="fa fa-plus"></span> Add City</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id='page-city-content'>
             	@include('adminpanel.tools.location.cities.micros.show_city_result')
              @include('adminpanel.tools.location.cities.micros.EditCityForm')
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>

@endsection



@section('your_script')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!-- <script  type="text/javascript" src="{{url('form.js')}}"></script> -->
<script type="text/javascript" src="{{url('js/angular.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>`
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>   -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript">
 

// $('#show_city_form').on('click',function(){

//   var modal=document.getElementById('city_edit_form');
//    modal.style.display = "blo";
// });





 </script>

@endsection
