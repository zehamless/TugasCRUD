<!DOCTYPE html>
<html lang="en">
<head>
    @include('storeLayout.head')
</head>
<body>
@include('storeLayout.navi')
<header class="bg-dark py-5">
    @include('storeLayout.header')
</header>
<section class="py-5">
    @yield('content')
</section>
@include('storeLayout.footer')
</body>
</html>
