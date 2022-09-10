@extends('layouts.main')

@section('content')
    <div class="listings-page">
        <div class="listings-city">
            <img class="listings-city__img"
                src="https://archello.s3.eu-central-1.amazonaws.com/images/2021/02/02/leo-romano-most-beautiful-house-private-houses-archello.1612253803.2979.jpg"
                alt="private_poolside_house">
            <h1 class="listings-city__title">South Beach</h1>
        </div>
        <div class="listings-filter">
            <div class="listings-filter__wrapper">
                <div class="listings-filter__option">
                    Any Price<i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    All Beds<i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    Home Type<i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    More<i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__button">
                    Search
                </div>
            </div>
        </div>
    </div>
@endsection
