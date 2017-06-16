


@extends('adminpanel3.layout.app') 


@section('your_css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
@endsection

@section('content')
<toaster-container  toaster-options="{'time-out': 50, 'close-button': true}">
</toaster-container>
<div class=" col-md-10 col-md-offset-1   ">
<section class="content-header">
      <h1>
       Manage State
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>State</li>
      </ol>  
    </section> 
    <!-- Main content -->
    <div class="container">
    <div class="row">
    <div class="col-md-4" >  
       <form id="advanced_search" method="POST" ng-submit="search(SearchByCountry)">
       <label>Search By</label>
        <!-- {{csrf_field()}} -->
        <select  data-ng-model="state.country_id" ng-change="SearchByCountry()" value="state.country_id" data-ng-options="country.id as country.name for country in countries" class="form-control">
        <option value="" deselected>Search by Country</option>
        </select>
        <!-- <input type="submit"  name="" value="Search"> -->
        </form>
        </div>
    </div>
</div><br>
    <section class="content"> 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="col-md-1 col-md-offset-10">
                          <button ng-click="add_newState_form()" class="btn btn-success ">Add State</button>
            </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div id='page-city-content'>
             	@include('adminpanel3.tools.location.cities.micros.show_State_result')
              @include('adminpanel3.tools.location.cities.micros.EditStateForm')
            </div>
              @include('adminpanel3.tools.location.cities.micros.AddNewState')
            
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
      </div>
    </section>
</div>

@endsection



@section('your_script')
<script src="{{url('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js" ></script>
<script  type="text/javascript" src="{{url('State.js')}}"></script>  
<script src="https://code.angularjs.org/1.2.0/angular-animate.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/1.1.0/toaster.min.js"></script><div>


@endsection
