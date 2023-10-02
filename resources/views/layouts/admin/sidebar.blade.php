<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Maktaba Online</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">M</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="{{route('admin_home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">App</li>
            <li class="dropdown">
                <a href="{{ route('parent') }}" class="nav-link"> <i class="far fa-user"></i> <span>Parents</span></a>

            </li>
            <li class="dropdown">
                <a href="{{ route('schools') }}" class="nav-link"><i
                        class="fas fa-columns"></i><span>Schools</span></a>

            </li>
            <li class="dropdown">
                <a href="{{route('feedback')}}" class="nav-link"><i class="fas fa-th-large"></i> <span>Reviews</span></a>

            </li>
            <li><a class="nav-link" href="{{route('book')}}"><i class="fas fa-exclamation"></i> <span>Books</span></a></li>
            <li class="dropdown">
                <a href="{{ route('schools') }}" class="nav-link"><i
                        class="fas fa-columns"></i><span>Reviews</span></a>

            </li>
            {{-- <li class="dropdown">
                <a href="{{route('feedback')}}" class="nav-link"><i class="fas fa-th-large"></i> <span>Feedback</span></a>

            </li>
            <li class="dropdown">
                <a href="{{route('client')}}" class="nav-link"><i class="fas fa-plug"></i> <span>Client</span></a>

            </li> --}}




    </aside>
</div>
