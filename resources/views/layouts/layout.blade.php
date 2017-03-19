<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body ng-app="flickrApp">

<div class="wrapper">
    @yield('content')
</div>

<script src="{{ asset('js/angular.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/IndexController.js') }}"></script>
<script src="{{ asset('js/PhotoController.js') }}"></script>
</body>
</html>