<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('partials.head')
</head>

<body>
    {{-- @include('partials.header') --}}
    <div class = "container">
        @yield('content')
    </div>

    @include('partials.js')
</body>

</html>
