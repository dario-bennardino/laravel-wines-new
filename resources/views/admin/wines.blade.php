@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Lista vini</h1>
    <div class="container my-4 ">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Wine</th>
                    <th scope="col">Winery</th>
                    <th scope="col">Aromi</th>
                    <th scope="col">Rating average</th>
                    <th scope="col">Rating reviews</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>

                        <td>{{ $wine->id }}</td>
                        <td>{{ $wine->wine }}</td>
                        <td>{{ $wine->winery }}</td>
                        <td>
                            @forelse ($wine->aromas as $aroma)
                                <span class="badge text-bg-success">{{ $aroma->name }}</span>
                            @empty
                                -
                            @endforelse

                        </td>
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
