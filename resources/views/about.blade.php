@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/about.css" />
@section('content')
<section id="pageUrl">
    <div class="url-link">
        <span>About Us</span>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-content">
                <div class="title">About Us</div>
                <div>
                    We are the technology company shaping the On-Demand Tradie
                    Economy in Australia. Our mission is to transform the way
                    things are traditionally done in the home improvement
                    industry.
                </div>
                <div class="about-text">
                    Over the past 16 years, we have been developing technology
                    that optimises the way tradies build, manage and grow their
                    businesses, helping Aussie homeowners to smoothly connect
                    with trusted trade professionals along the way.
                </div>
                <div class="about-text">
                    It’s been an epic ride, from two friends bringing their idea
                    to life at the back of a garage to the company leading the
                    optimisation of the residential trade industry. At the heart
                    of our success, our passionate team of 200+ members who
                    focus on solving the pain points of tradies and homeowners
                    through features that bring simplicity and trust.
                </div>
                <div class="about-text">
                    This is an exciting period of growth for us as we continue
                    to lead the change in the industry.
                </div>
            </div>
            <div class="col-md-6 about-img">
                <img src="{{ asset('assets/img/about/about.png') }}" />
            </div>
        </div>
    </div>
</section>
<section id="aboutType">
    <div class="contain">
        <div class="row">
            <div class="type-card">
                <img src="{{ asset('assets/img/about/type (2).svg') }}" />
                <p>Professional</p>
                <span
                    >rom exhaust fan assessment to reviewing attic space and
                    cleaning refrigerator coils to give you a safe life.</span
                >
            </div>
            <div class="type-card">
                <img src="{{ asset('assets/img/about/type (1).svg') }}" />
                <p>24/7 Services</p>
                <span
                    >rom exhaust fan assessment to reviewing attic space and
                    cleaning refrigerator coils to give you a safe life.</span
                >
            </div>
            <div class="type-card">
                <img src="{{ asset('assets/img/about/type (3).svg') }}" />
                <p>Affordable Price</p>
                <span
                    >rom exhaust fan assessment to reviewing attic space and
                    cleaning refrigerator coils to give you a safe life.</span
                >
            </div>
        </div>
    </div>
</section>
<section id="aboutPartner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 partner-img">
                <img src="{{ asset('assets/img/about/partner.svg') }}" />
            </div>
            <div class="col-md-6 about-content partner-content">
                <div class="title">Partner with us</div>
                <div class="about-text">
                    Our vast network and 16 years of experience in the
                    Australian residential trade sector means that we are
                    trusted by some of the nation’s biggest companies.
                    Regardless of the size of your business, our network of
                    Aussie tradies and homeowners can provide ample
                    opportunities to your own customer experience. Our team can
                    work with you to build a service using our expert technology
                    solutions.
                </div>
                <div>
                    <button class="orange-btn find-more">Find out more</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mission">
    <div class="testimonial-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-content">
                <div class="title">Our Mission</div>
                <div>
                    <div class="about-text">
                        Paetos dignissim at cursus elefeind norma arcu.
                        Pellentesque accumsan est in tempus etos ullamcorper,
                        sem quam suscipit lacus maecenas tortor. Erates vitae
                        node metus. Suspendissegravida ornare non mattis velit
                        rutrum modest. Morbi suspendisse a tortor velim
                        pellentesque uter justo magna gravida. Pellentesque
                        accumsan, ex in tempus ullamcorper terminal. Setis lacus
                        suscipit tortor erat vitae metus.
                    </div>
                    <div class="about-text">
                        Morbi nulla tortor, dignissim at node cursus euismod est
                        arcu. Nomad turbina uter vehicula justo magna paetos in
                        terminal. Pellentesque in accumsan tempus, terminal
                        ullamcorper a quam suscipit lacus
                    </div>
                    <div class="about-text">
                        Morbi nulla tortor, dignissim at node cursus euismod est
                        arcu. Nomad turbina uter vehicula justo magna paetos in
                        terminal. Pellentesque in accumsan tempus, terminal
                        ullamcorper a quam suscipit lacus
                    </div>
                </div>
            </div>
            <div class="col-md-6 question-content">
                <div class="title">Popular Questions</div>
                <div class="question-why why-up">
                    <img src="{{ asset('assets/img/about/circle-up.svg') }}" />
                    <span>Why does a renovation project cost so much?</span>
                </div>
                <div class="about-text">
                    Paetos dignissim at cursus elefeind norma arcu. Pellentesque
                    accumsan est in tempus etos ullamcorper, sem quam suscipit
                    lacus maecenas tortor. Erates vitae node metus.
                </div>
                <div>
                    <div class="question-why why-down">
                        <img
                            src="{{
                                asset('assets/img/about/circle-down.svg')
                            }}"
                        />
                        <span>Why does a renovation project cost so much?</span>
                    </div>
                    <div class="question-why why-down">
                        <img
                            src="{{
                                asset('assets/img/about/circle-down.svg')
                            }}"
                        />
                        <span>Why does a renovation project cost so much?</span>
                    </div>
                    <div class="question-why why-down">
                        <img
                            src="{{
                                asset('assets/img/about/circle-down.svg')
                            }}"
                        />
                        <span>Why does a renovation project cost so much?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
