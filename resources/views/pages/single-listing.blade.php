@extends('layouts.main')
@section('page-tab-title', '23 Grand Ave - Smith Realty')
@section('content')
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://via.placeholder.com/2400x1602" alt="23 Grand Ave">
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form action="" class="listing-top__form">
                    <label class="listing-top__form-label">
                        Schedule a Showing
                    </label>
                    <div class="listing-top__form-group listing-top__form-group--horizontal">
                        <div class="listing-top__form-option">
                            In Person
                        </div>
                        <div class="listing-top__form-option">
                            Virtual
                        </div>
                    </div>
                    <label class="listing-top__form-label">
                        Date
                    </label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">
                            Feburary 20, 2021
                        </div>
                    </div>
                    <label class="listing-top__form-label">
                        Time
                    </label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">
                            10:00 AM
                        </div>
                    </div>
                    <label class="listing-top__form-label">
                        Personal Information
                    </label>
                    <div class="listing-top__form-group">
                        <input type="text" class="listing-top__form-input" placeholder="Phone Number">
                    </div>
                    <div class="listing-top__form-group">
                        <input type="text" class="listing-top__form-input" placeholder="Email">
                    </div>
                    <div class="listing-top__form-group">
                        <button type="submit" class="listing-top__form-button">
                            Schedule A Tour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>23 Grand Ave
                        <br>
                        Miami, FL 33134
                    </h1>
                    <div class="listing-info-details">
                        <span class="listing-info__details-text"><i
                                class="fa-solid fa-bed listing-info__details-icon"></i> 3</span>
                        <span class="listing-info__details-text"> <i
                                class="fa-solid fa-bath listing-info__details-icon"></i> 2</span>
                        <span class="listing-info__details-text"> <i
                                class="fa-solid fa-ruler listing-info__details-icon"></i> 1,200 sqft</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="listing-info__agent-title">
                        Agent
                    </div>
                    <div class="listing-info__agent-name">John Smith</div>
                    <p class="listing-info__agent-profile">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda unde facilis voluptate. Illo
                        qui corrupti iste! Numquam ea autem voluptatem distinctio ad voluptatum!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="listing-extra">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extra__details">
                        <h2>
                            More Info
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda unde facilis voluptate.
                            Illo qui corrupti iste! Numquam ea autem voluptatem distinctio ad voluptatum!
                        </p>
                        <h3>Details</h3>
                        <ul>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="listing-extra__gallery">
                        <h2>
                            Images
                        </h2>
                        <img src="https://via.placeholder.com/2400x1602" alt="23 Grand Ave">
                        <img src="https://via.placeholder.com/2400x1602" alt="23 Grand Ave">
                        <img src="https://via.placeholder.com/2400x1602" alt="23 Grand Ave">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection