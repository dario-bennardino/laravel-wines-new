<header>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="{{ route('home') }}" target="_blank" class="navbar-brand">Vedi il sito</a>
            <div class="d-flex">
                <form class="d-flex me-3 " role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="me-3">
                    <p>{{ Auth::user()->name }}</p>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger "><i
                            class="fa-solid fa-right-from-bracket"></i></button>
                </form>

            </div>


            {{-- <button>esci</button> --}}
        </div>
    </nav>

</header>
