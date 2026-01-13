<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'PVM Automation & Robotics')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    @include('layouts.header-link')
</head>

<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- Main Content --}}
    <main class="content-wrapper">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    @stack('scripts')

</body>
</html>
