@extends('layouts.account')
@section('page-tab-title', 'User Saved Listings -Smith Realty')
@section('title', 'Saved Listings')
@section('page-background',
    'https://npr.brightspotcdn.com/dims4/default/a0440f5/2147483647/strip/true/crop/1200x630+0+60/resize/1200x630!/quality/90/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2F1a%2Fa2%2Ff322553e43b78aefe2824628ca33%2Fhearts-istock-happy-lucky.jpg')
@section('page-background-alt', 'hearts_image')
@section('content')
    <div class="listings-properties">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xxl-4">
                <div class="listings-properties__items">
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
                </div>
            </div>
        </div>
    </div>
@endsection
