@extends('layouts.account')
@section('page-tab-title', 'Listing Request Status -Smith Realty')
@section('title', 'Saved Listings')
@section('page-background',
    'https://npr.brightspotcdn.com/dims4/default/a0440f5/2147483647/strip/true/crop/1200x630+0+60/resize/1200x630!/quality/90/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2F1a%2Fa2%2Ff322553e43b78aefe2824628ca33%2Fhearts-istock-happy-lucky.jpg')
@section('page-background-alt', 'hearts_image')
@section('content')
    <div class="request-list">
        @for ($i = 0; $i < 10; $i++)
            <div class="request-list__wrapper">
                <div>
                    <h2>213 Grand Ave, Miami, FL 33139</h2>
                    <span class="request-list__details">
                        <i class="fa-solid fa-bed"></i> 3
                        <i class="fa-solid fa-bath"></i> 2
                        <i class="fa-solid fa-ruler"></i> 1,200 sqft
                    </span>
                </div>

                <div class="request-list__info">
                    <span class="request-list__info-title">Status</span>
                    <div
                        class="request-list__info-status request-list__info-status--success request-list__info-status--canceled request-list__info-status--sold">
                        sold
                    </div>
                </div>
            </div>
        @endfor

    </div>
@endsection
