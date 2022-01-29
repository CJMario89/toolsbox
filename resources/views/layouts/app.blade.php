<!DOCTYPE html>
<html>
    <head>
	    @yield('head')
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="icon" href="{{asset('images/box.svg')}}" sizes="any" type="image/svg+xml">
        @include('js.app')
        @include('js.components.navbar')
        @include('js.components.footer')
    </head>
    <body>
        @include('components.navbar')
	    @yield('content')
        @include('components.footer')
    </body>
	@yield('js')
</html>