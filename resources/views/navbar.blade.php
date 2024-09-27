<nav class="navbar navbar-expand-lg navbar-light bg-warning font-weight-bold text-dark">
    <div class="container-fluid d-flex justify-content-center text-dark">
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">{{ __('Home') }}</a>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">{{ __('Cart') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">{{ __('Profile') }}</a>
                </li>
                @if (auth()->user()->roles_id == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="/account">{{ __('Account Maintenance') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
