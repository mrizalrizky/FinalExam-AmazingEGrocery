<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazing E-Grocery | @yield('title')</title>

    {{-- Styles --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    {{-- Scripts --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>
