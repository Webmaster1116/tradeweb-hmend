@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/service.css" />

@section('content')
<section id="service">
    <div class="container">
        <div class="smarter service-average">
            <div class="smarter-header service-header">
                Licensed Plumbers in Perth WA
            </div>
            <div class="service-rating">
                <span>Average Rating 4.93</span>
                <div>
                    <img src="{{ asset('assets/img/service/star.svg') }}" />
                    <img src="{{ asset('assets/img/service/star.svg') }}" />
                    <img src="{{ asset('assets/img/service/star.svg') }}" />
                    <img src="{{ asset('assets/img/service/star.svg') }}" />
                    <img src="{{ asset('assets/img/service/star.svg') }}" />
                </div>
            </div>
            <div class="average-rating">
                <div class="average-rating-header">Average Rating 4.93</div>
                <div class="search-group postcode-group">
                    <div class="postcode has-search">
                        <input
                            type="text"
                            class="form-control postcode-input"
                            placeholder="Please type a Postcode"
                        />
                    </div>
                    <div>
                        <button
                            class="
                                smarter-search-btn-group
                                postcode-btn-started
                            "
                        >
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="serviceQuote">
    <div class="container">
        <div class="how-works service-quote">
            <div class="service-quote-header">
                Average rating of Plumbers servicing Perth
                <span
                    >based on 3104 ratings for Plumbers hired through
                    hipages</span
                >
            </div>
            <div class="service-quote-rating">
                <div class="service-quote-rating-stars">
                    <span>4.9</span>
                    <div>
                        <img src="{{ asset('assets/img/service/star.svg') }}" />
                        <img src="{{ asset('assets/img/service/star.svg') }}" />
                        <img src="{{ asset('assets/img/service/star.svg') }}" />
                        <img src="{{ asset('assets/img/service/star.svg') }}" />
                        <img src="{{ asset('assets/img/service/star.svg') }}" />
                    </div>
                </div>
                <div>
                    <button class="service-quote-btn">Get Quotes</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="suburb">
    <div class="container">
        <div class="suburb-header">
            <span class="home-title">Suburbs included in this area</span>
            <div class="suburb-header-btns">
                <button class="active">City Delivery Centre</button>
                <button>Perth GPO</button>
                <button>Perth</button>
            </div>
        </div>
        <div class="row">
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (1).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (2).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (3).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (4).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (5).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
            <div class="quote-card">
                <div class="quote-card-image">
                    <img
                        src="{{ asset('assets/img/service/service (6).svg') }}"
                    />
                </div>
                <div class="card-body">
                    <div class="card-title">Perth Plumbers and Gas Fitters</div>
                    <div class="card-info">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/location.svg')
                                }}"
                            />
                            <span>Perth</span>
                        </div>
                        <div>
                            <span class="card-star-rate">4.9</span>
                            <img
                                src="{{
                                    asset('assets/img/service/star-sm.svg')
                                }}"
                            />
                            <span
                                >(76 ratings) &nbsp &nbsp| &nbsp &nbsp<span
                                    >Hired 124 times
                                </span></span
                            >
                        </div>
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/service/mobile.svg')
                                }}"
                            />
                            <span>356528657664</span>
                        </div>
                    </div>
                    <div class="card-text">
                        At Perth Plumbers and Gas Fitters, our goal is to meet
                        all your plumbing, sanitation and gas requirements
                        including, Supply & Installing new hot water services,
                        unblocking a troubled drain or toilet, fixing leaky taps
                        and burst...
                    </div>
                    <div class="card-btns-group">
                        <div class="card-btns">
                            <button>Request a Quote</button>
                            <a href="javascript:void(0)">Make an Enquiry</a>
                        </div>
                        <span>85 Recommendations</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagenation-btn">
            <button><span class="fa fa-angle-left"></span></button>
            <button><span class="fa fa-angle-right"></span></button>
        </div>
    </div>
</section>

@endsection
