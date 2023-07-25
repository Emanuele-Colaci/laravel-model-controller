@extends('layouts.app')

@section('content')
    <div class="position-relative">
        <!-- JUMBOTRON -->
        <img class="jumbotron1" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="Jumbotron">
        <img class="position1" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
    </div>
    <div class="container p-5">
        <div class="row">
            <div class="col-7">
                <h2>{{ $comic['title'] }}</h2>
                <div class="d-flex">
                    <div class="mt-4 p-2 px-3 bg-success border-end d-flex justify-content-between align-items-center w-100"> 
                        <p class="pt-2 text-white"><span class="text-white-50">U.S. Price:</span> {{ $comic['price'] }}</p>
                        <div>
                            <p class="pt-2 text-white-50">AVAILABLE</p>
                        </div>
                    </div>
                    <select class="border border-0 bg-success w-50 text-end text-white mt-4">
                        <option>Check Availability</option>
                    </select>
                </div>
                <p class="mt-4">
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="col-5">
                <img class="dimension-img float-end" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row">
            <div class="col-6">
                <h5 class="mb-5">Talent</h5>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Art by:</p>
                    </div>
                    <div class="dimension-text">
                        <ul class="list-unstyled">
                                <a href="#" class="text-primary">
                                    <li class="d-inline">{{ $comic['artists'] }}</li>
                                </a>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Written by:</p>
                    </div>
                    <div class="dimension-text">
                        <ul class="list-unstyled">
                                <a href="#" class="text-primary">
                                    <li class="d-inline">{{ $comic['writers'] }}</li>
                                </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h5 class="mb-5">Specs</h5>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>Series:</p>
                    </div>
                    <div class="dimension-text">
                        <a href="#" class="text-primary">
                            {{ $comic['series'] }}
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>U.S. Price:</p>
                    </div>
                    <div class="dimension-text">
                        {{ $comic['price'] }}
                    </div>
                </div>
                <div class="d-flex justify-content-between border-margin">
                    <div>
                        <p>On Sale Date:</p>
                    </div>
                    <div class="dimension-text">
                        {{ $comic['sale_date'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="image-container d-flex align-items-center">
                <p class="">DIGITALS COMICS</p> 
                <img class="margin" src="{{Vite::asset('/resources/images/cta-icons.png')}}" alt="">
            </div>
            <div class="image-container1 d-flex align-items-center">
                <p class="">SHOP DC</p> 
                <img class="margin" src="{{Vite::asset('/resources/images/cta-icons.png')}}" alt="">
            </div>
            <div class="image-container2 d-flex align-items-center">
                <p class="">COMIC SHOP LOCATOR</p> 
                <img class="margin" src="{{Vite::asset('/resources/images/cta-icons.png')}}" alt="">
            </div>
            <div class="image-container3 d-flex align-items-center">
                <p class="">SUBSCRIPTIONS</p> 
                <img class="margin" src="{{Vite::asset('/resources/images/cta-icons.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection