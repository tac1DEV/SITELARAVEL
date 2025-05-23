<header>
    @if (Route::has('login'))
        <nav>
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="text-blue-500"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a 
                    href="{{ route('register') }}"
                    class="text-red-500"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>