@extends('layout')

@section('title')
    Laravel test Page
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Hello Laravel2
        </div>
        <div class="links">

            <ul>
            @foreach ($links as $link)
                <li>{{ $link }}</li>
            @endforeach
            </ul>

        </div>
    </div>
@endsection
