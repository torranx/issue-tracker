<nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-white border-bottom px-3">
    <div class="w-100">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-decoration-none nav-link">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="nav-item dropdown" href="#">
                    <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                            @csrf
                                <a href="{{ route('logout') }}"
                                    class="text-decoration-none text-dark"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>