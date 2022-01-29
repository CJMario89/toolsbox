<!DOCTYPE html>
<html>
    <head>
	    @yield('head')
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        @include('js.app')
        @include('js.components.navbar')
        @include('js.components.footer')
    </head>
    <body>
        @include('components.navbar')
        @include('components.footer')
	    @yield('content')
    </body>
	@yield('js')
</html>