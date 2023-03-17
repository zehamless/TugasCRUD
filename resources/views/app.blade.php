<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body>
@include('layout.navi')
<header class="bg-dark py-5">
    @include('layout.header')
</header>
<section class="py-5">
    @yield('content')
</section>
@include('layout.js')
</body>
</html>
