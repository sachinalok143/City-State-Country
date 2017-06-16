<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>City</title>
    @yield('your_css')

        <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- For toastr- - - - - - - - - - - - -->
    @yield('your_script')

</head>
<body>
<div ng-app="Form" >
    <div ng-controller="CityController" > 
        @yield('content')
    </div>   
</div>
</body>
</html>
