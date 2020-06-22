<!-- Navigation -->
<nav class="navbar navbar-light bg-faded justify-content-between flex-nowrap flex-row">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand float-left">
            <img src="{{ asset('assets/images/logo.svg') }}" class="desktop" alt="logo">
            <img src="{{ asset('assets/images/logo-symbol.svg') }}" class="mobile" alt="logo">
        </a>
        <ul class="nav navbar-nav flex-row float-right">
            <li class="nav-item nav-menu"><a class="nav-link pr-3" href="{{ route('login') }}"><img src="{{ asset('assets/images/user.svg') }}" alt=""> <span>Login</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('register?plan=free') }}"><button class="btn btn-primary my-2 my-sm-0 nav-button">Try For Free</button></a></li>
        </ul>
    </div>
</nav>
