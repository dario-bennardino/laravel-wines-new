@extends('layouts.admin')

@section('content')
    <h1>Nuovo Vino</h1>

    <div class="my-4 container ">
        <form action="{{ route('admin.wines.store') }}" method="POST">
            @csrf

            <label for="wine" class="form-label">nome vino</label>
            <div class="d-flex">
                <input class="form-control me-2" type="text" placeholder="nome" name="wine">
                <button class="btn btn-outline-success" type="submit">Send</button>
            </div>

            <label for="winery" class="form-label">nome cantina</label>
            <div class="d-flex">
                <input class="form-control me-2" type="text" placeholder="cantina" name="winery">
            </div>

            <label for="rating_average" class="form-label">media voto</label>
            <div class="d-flex">
                <input class="form-control me-2" type="number" placeholder="media voto" name="rating_average">
            </div>

            <label for="rating_reviews" class="form-label">numero recensioni</label>
            <div class="d-flex">
                <input class="form-control me-2" type="text" placeholder="numero recensioni" name="rating_reviews">
            </div>

            <label for="location" class="form-label">location</label>
            <div class="d-flex">
                <input class="form-control me-2" type="text" placeholder="location" name="location">
            </div>

            <label for="image" class="form-label">immagini</label>
            <div class="d-flex">
                <input class="form-control me-2" type="text" placeholder="image" name="image">
            </div>





        </form>

    </div>
@endsection
