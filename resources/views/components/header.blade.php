<div class="header">
    <div class="container">
        <a href="/" class="header__logo">
            Villa.io
        </a>
        <div class="header__menu">
            <a class="header__menu-link
            @if (request()->routeIs('listings')) header__menu-link--active @endif
            "
                href="/seaview/sale/miami">Listing</a>
            <a class="header__menu-link" href="/">Property</a>
            <a class="header__menu-link" href="/about">About</a>
            <a class="header__menu-link" href="/contact">Contact</a>
        </div>
        <div class="header__account">
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('account') }}" class="header__account-link"><i class="fa-solid fa-heart"></i></a>
                    <a href="{{ route('show-status') }}" class="header__account-link"><i class="fa-solid fa-user"></i></a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href={{ route('logout') }}
                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            class="header__account-link--anchor">
                            Log Out
                        </a>
                    </form>
                    {{-- <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                @else
                    <a href="{{ route('login') }}" class="header__account-link--anchor">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="header__account-link--anchor">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</div>
