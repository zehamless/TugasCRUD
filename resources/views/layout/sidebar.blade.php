<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Gudang</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link active" href="{{route('barang.index')}}"><i class="fas fa-tachometer-alt"></i><span>Barang</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}"><i class="fas fa-user"></i><span>Admin</span></a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="text-center d-none d-md-inline" href="route('logout')"><button class="btn rounded-circle border-0" id="sidebarToggle" type="submit"></button></div>
        </form>

    </div>
</nav>
