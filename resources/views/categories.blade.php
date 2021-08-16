@extends('layouts.main')
@section('container')

    <h1 class="mb-5">Post Categories</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2> <a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>

            </li>
        </ul>
    @endforeach

@endsection
