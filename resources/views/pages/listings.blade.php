@extends('layouts.main')
@section('page-tab-title', 'All Properties - Smith Realty')
@section('content')
    <div class="listings-page">
        <div class="listings-city">
            <img class="listings-city__img"
                src="https://archello.s3.eu-central-1.amazonaws.com/images/2021/02/02/leo-romano-most-beautiful-house-private-houses-archello.1612253803.2979.jpg"
                alt="private_poolside_house" />
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
                <div class="listings-filter__button">Search</div>
            </div>
        </div>
        <div class="listings-properties">
            <div class="container">
                <div class="row">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <a href="/listing/2121-grand-ave-miami-fl-33456/1" class="listings-properties__items">
                                <img class="listings-city__img"
                                    src="https://archello.s3.eu-central-1.amazonaws.com/images/2021/02/02/leo-romano-most-beautiful-house-private-houses-archello.1612253803.2979.jpg"
                                    alt="private_poolside_house" />
                                <div class="listings-properties__items-saved">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <span class="listings-properties__items-price">$250,000</span>
                                <span class="listings-properties__items-details">
                                    <i class="fa-solid fa-bed"></i> 3
                                    <i class="fa-solid fa-bath"></i> 2
                                    <i class="fa-solid fa-ruler"></i> 1,200 sqft
                                </span>
                                <span class="listings-properties__items-address">
                                    1234 Main Street,<br />
                                    Miami, FL 33101
                                </span>
                                <div class="listings-properties__items-line"></div>
                                <span class="listings-properties__items-owner">
                                    Carl Johnson
                                </span>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
