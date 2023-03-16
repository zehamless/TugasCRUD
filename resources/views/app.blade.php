<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.head')
</head>
<body id="page-top">
<div id="wrapper">
    @include('dashboard.sidebar')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            @include('dashboard.header')
            @yield('content')
        </div>
    </div>
</div>

@include('dashboard.js')
</body>
</html>
