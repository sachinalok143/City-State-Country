

@extends('adminpanel.layout.app') 

@section('your_css')
<title>Cities</title>
<link rel="stylesheet"  href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet"  href="{{url('style.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.css" rel="stylesheet" />
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->

@endsection

@section('content')
<div ng-app="manageCity" >
<div ng-controller="CityController" > 
<toaster-container>
</toaster-container>
<div ng-view>
<div class=" col-md-10 col-md-offset-1">
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
    <div class="row">
    <div class="col-md-4">
    <div class="form-group" >
        
       <form id="advanced_search" method="POST" ng-submit="searchCityByDistrict(SearchDistrict)">
        <!-- {{csrf_field()}} -->
        <label>Search By</label>
        <select  data-ng-model="SearchDistrict" ng-change="searchCityByDistrict(SearchDistrict)"  class="form-control" value="district.id" data-ng-options="district.id as district.district_name for district in districts">
        <option value="" deselected>Search by District</option>
        </select>
        <!-- <input type="submit"  name="" value="Search"> -->
        
        </form>
</div>
</div>
</div>
</div>
        

    <section class="content"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="col-md-1 col-md-offset-11">
              <button ng-click="showAddNewCityForm()" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Add City</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id='page-city-content'>

             	@include('adminpanel.tools.location.cities.angularModule.micros.showCityResult')
              @include('adminpanel.tools.location.cities.angularModule.micros.EditCityForm')
              @include('adminpanel.tools.location.cities.angularModule.micros.AddNewCity')
            
            </div>
            <div id="Error" style="padding-top:200px; text-align: center;">
              <h1>No data available</h1>
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
</div>
</div>
</div>
@endsection



@section('your_script')

<script src="{{ asset('js/app.js') }}"></script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<!-- <script type="text/javascript" src="{{asset('js/angular.js')}}"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://code.angularjs.org/1.2.0/angular-animate.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.js"></script>

<script src="{{asset('js/adminPanelJsFiles/city.js')}}"></script>  
@endsection
