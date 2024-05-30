@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Lista vini</h1>
    <div class="container my-4 ">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">winery</th>
                    <th scope="col">wine</th>
                    <th scope="col">rating_average</th>
                    <th scope="col">rating_reviews</th>
                    <th scope="col">location</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>

                        <td>{{ $wine->id }}</td>
                        <td>{{ $wine->winery }}</td>
                        <td>{{ $wine->wine }}</td>
                        <td>{{ $wine->rating_average }}</td>
                        <td>{{ $wine->rating_reviews }}</td>
                        <td>{{ $wine->location }}</td>
                        <td><img style="max-width: 120px" src="{{ $wine->image }}" alt="{{ $wine->wine }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        {{ $wines->links() }}
    </div>
@endsection
