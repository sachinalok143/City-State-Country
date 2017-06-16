<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>States</title>

    <!-- Styles -->
    
    @yield('your_script')
    @yield('your_css')
</head>
<body>
   
<div ng-app="Form" ng-controller="CityController">
        @yield('content')
</div>
    <!-- Scripts -->
   
</body>
</html>


