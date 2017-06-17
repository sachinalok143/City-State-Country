

@extends('adminpanel.layout.app') 
@section('your_css')
<title>Districts</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

@endsection

@section('content')
<div ng-app="manageDistrict" ng-controller="DistrictController">

 <toaster-container>
</toaster-container>
<div class="col-md-10 col-md-offset-1">
<div class="col-md-12 ">
<section class="content-header">
      <h1>
       Manage districts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>District</li>
      </ol>  
    </section> 
 </div> 


    <!-- Main content -->
    <div class="container">
     <div class="row">
    <div class="col-md-4">  
    <div class="form-group">
        
       <form id="advanced_search" method="POST" ng-submit="searchCityByState(SearchDistrict)">
        <!-- {{csrf_field()}} -->
        <label>Search By</label>
        <select  data-ng-model="state.id" ng-change="searchCityByState()" class="form-control" value="state.id" data-ng-options="state.id as state.name for state in states">
        <option value="" deselected>Search by State</option>
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
            <div class="col-md-1 col-md-offset-10">
              <button ng-click="showAddNewDistrictForm()" class="btn btn-success btn-sm "><span class="fa fa-plus"></span> Add District</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body"   >
            <div id="page-city-content">
             	@include('adminpanel.tools.location.districts.angularModule.micros.showDistrictResult')
              @include('adminpanel.tools.location.districts.angularModule.micros.EditDistrictForm')
              </div>
              @include('adminpanel.tools.location.districts.angularModule.micros.AddNewDistrict')
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
    
@endsection



@section('your_script')
 <script src="{{ asset('js/app.js') }}"></script>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js" ></script>
<script src="https://code.angularjs.org/1.2.0/angular-animate.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.js"></script>

<script  type="text/javascript" src="{{url('js/adminPanelJsFiles/district.js')}}"></script>  
@endsection
