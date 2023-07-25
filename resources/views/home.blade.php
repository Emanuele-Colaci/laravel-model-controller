@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($comics as $comic)
                    {{ $comic->title }}
                @endforeach
            </div>
        </div>
    </div>

@endsection
