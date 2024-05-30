<header>
    {{-- <h1>Header</h1> --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="{{ route('admin.home') }}">Boolwines</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.wines') }}">Wines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.wines.create') }}">Nuova Pagina</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('nuova-pagina') }}">Nuova Pagina</a>
    <a href="{{ route('wines') }}">Wines</a> --}}
</header>
