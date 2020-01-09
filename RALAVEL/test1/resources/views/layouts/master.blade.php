<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
    <body>
    @include('partials.header')
    <div class="container border border-danger">
        @yield('content')
    </div>
    @include('partials.footer')
    @include('partials.js')
    </body>
</html>
