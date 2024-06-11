<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{route('user.index')}}" class="navbar-brand">
            <img src="{{asset('assets')}}/dist/img/SiteLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">User Panel</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">Home</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('user.chat.index')}}">
                    <i class="far fa-comments"></i>
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('user.announcement.index')}}">
                    <i class="fas fa-bullhorn"></i>
                </a>
            </li>

            <!-- Profile -->
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name ?? 'User'}}</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                    <li><a href="{{ route('user.profile.edit', ['id' => Auth::user()->id]) }}" class="dropdown-item">Profile</a></li>
                    <li><a href="{{route('logout')}}" class="dropdown-item">Logout</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->
