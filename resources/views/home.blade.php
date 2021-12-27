@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />

@section('content')
<section id="welcome">
    <div class="container">
        <div class="smarter">
            <div class="smarter-header">Ready to Live Smarter?</div>
            <div class="search-group">
                <div class="form-group has-feedback has-search">
                    <span
                        class="glyphicon glyphicon-search form-control-feedback"
                    ></span>
                    <input
                        type="text"
                        class="form-control home-search"
                        placeholder="Search by trade or business name.."
                    />
                </div>
                <div>
                    <button class="smarter-search-btn-group">
                        <span
                            class="
                                glyphicon glyphicon-search
                                smarter-search-btn
                            "
                        ></span>
                        <span>Search</span>
                    </button>
                </div>
            </div>
            <div class="smarter-btns">
                <button>Get Quotes</button>
                <button>Find Jobs</button>
            </div>
        </div>
    </div>
</section>
<section id="home-works">
    <div class="container">
        <div class="how-works">
            <div class="home-title">How it works</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="works-card">
                            <img
                                src="{{
                                    asset('assets/img/home/icon-checklist.svg')
                                }}"
                            />
                            <div>Tell us what you need</div>
                            <p>
                                Answer a few quick questions and even
                                <br />upload a photo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="works-card">
                            <img
                                src="{{
                                    asset('assets/img/home/icon-files.svg')
                                }}"
                            />
                            <div>
                                Get multiple quotes from <br />
                                professional tradies
                            </div>
                            <p>
                                Answer a few quick questions and even
                                <br />upload a photo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="works-card">
                            <img
                                src="{{
                                    asset('assets/img/home/icon-checked.svg')
                                }}"
                            />
                            <div>
                                Choose the best tradie <br />
                                for the job
                            </div>
                            <p>
                                Answer a few quick questions and even
                                <br />upload a photo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-cards">
            <div class="home-title category-title">Top Categories</div>
            <div class="row">
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/cleaning.svg')
                                }}"
                            />
                        </div>
                        <span>Cleaning</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/electrical.svg')
                                }}"
                            />
                        </div>
                        <span>Electrical</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/plumbing.svg')
                                }}"
                            />
                        </div>
                        <span>Plumbing</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/appliances.svg')
                                }}"
                            />
                        </div>
                        <span>Appliances</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/carpentry.svg')
                                }}"
                            />
                        </div>
                        <span>Carpentry</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{ asset('assets/img/home/geyser.svg') }}"
                            />
                        </div>
                        <span>Geyser Service</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{ asset('assets/img/home/vehicle.svg') }}"
                            />
                        </div>
                        <span>Vehicle Care</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{ asset('assets/img/home/pest.svg') }}"
                            />
                        </div>
                        <span>Pest Control</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{
                                    asset('assets/img/home/painting.svg')
                                }}"
                            />
                        </div>
                        <span>Painting</span>
                    </div>
                </div>
                <div class="category-card">
                    <div class="categories">
                        <div>
                            <img
                                src="{{ asset('assets/img/home/more.svg') }}"
                            />
                        </div>
                        <span>View More</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="numbers">
    <div class="contain">
        <div class="row">
            <div class="number-card">
                <img src="{{ asset('assets/img/home/number-quality.svg') }}" />
                <p>100%</p>
                <span>Quality</span>
            </div>
            <div class="number-card">
                <img src="{{ asset('assets/img/home/number-people.svg') }}" />
                <p>2500+</p>
                <span>People Working</span>
            </div>
            <div class="number-card">
                <img src="{{ asset('assets/img/home/number-years.svg') }}" />
                <p>8 Years</p>
                <span>Years Experience</span>
            </div>
            <div class="number-card">
                <img src="{{ asset('assets/img/home/number-smiles.svg') }}" />
                <p>900+</p>
                <span>Happy Smiles</span>
            </div>
        </div>
    </div>
</section>
<section id="trust">
    <div class="container">
        <div class="trust-cards">
            <div class="home-title">Your Trust and Security</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>Saves You Time</span>
                                <p>
                                    We helps you live smarter, giving you time
                                    to focus on what's most important.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>For Your Safety</span>
                                <p>
                                    All of our Helpers undergo rigorous identity
                                    checks and personal interviews. Your safety
                                    is even our concern too.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>Best-Rated Professionals</span>
                                <p>
                                    Our experienced taskers perform their tasks
                                    with dedication and perfection. We
                                    appreciate your reviews about the service.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>We Are Well Equipped</span>
                                <p>
                                    Let us know if you have any specific
                                    equirement, otherwise our guys carry their
                                    own supplies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>Always In Touch</span>
                                <p>
                                    Book your service online on one tap, keep a
                                    track of your service status and also keep
                                    in touch with your Helper.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-card">
                            <div class="trust-card-img">
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/home/icon-checklist.svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div>
                                <span>Cash-Free Facility</span>
                                <p>
                                    Pay through secure online mode only after
                                    your job is done.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonial">
    <div class="testimonial-bg"></div>
    <div class="container">
        <div class="home-title">Testimonial</div>
        <div
            id="testimonialCarousel"
            class="carousel slide"
            data-interval="false"
        >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialCarousel" data-slide-to="0"></li>
                <li
                    data-target="#testimonialCarousel"
                    data-slide-to="1"
                    class="active"
                ></li>
                <li data-target="#testimonialCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <div class="team-cards">
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (1).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (2).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (3).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item active">
                    <div class="team-cards">
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (1).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (2).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (3).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-cards">
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (1).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (2).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <div class="team-imgs">
                                    <div class="team-img">
                                        <img
                                            src="{{
                                                asset(
                                                    'assets/img/home/testimonial (3).svg'
                                                )
                                            }}"
                                        />
                                    </div>
                                </div>
                                <div class="team-card">
                                    <span class="testimonial-content"
                                        >Lorem ipsum dolor sit amet, conse
                                        cteturlol adipisicing elit, sed do
                                        eiusmod temporlop incididunt ut labore
                                        et dolore.</span
                                    >
                                    <span class="testimonial-name">
                                        Maksud Reza
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog">
    <div class="container">
        <div class="home-title blog-title">Latest News</div>
        <div class="top-cards col-md-12">
            <div class="col-md-4">
                <div class="top-card card">
                    <img
                        class="card-top-img"
                        src="{{ asset('assets/img/home/blog-img1.png') }}"
                    />
                    <div class="card-body">
                        <div class="news-clock">
                            <img
                                src="{{ asset('assets/img/home/clock.svg') }}"
                            />
                            <span>14 Sep, 2019</span>
                        </div>
                        <h5 class="card-title">
                            Lorem ipsum dolor sit amet conse.
                        </h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet con adipisic elit sed do
                            eiusmod tel incididunt ut lab et dolore mag aliqua.
                        </p>
                        <a href="blog-detail" class="btn card-view-btn"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-card card">
                    <img
                        class="card-top-img"
                        src="{{ asset('assets/img/home/blog-img2.png') }}"
                    />
                    <div class="card-body">
                        <div class="news-clock">
                            <img
                                src="{{ asset('assets/img/home/clock.svg') }}"
                            />
                            <span>14 Sep, 2019</span>
                        </div>
                        <h5 class="card-title">
                            Lorem ipsum dolor sit amet conse.
                        </h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet con adipisic elit sed do
                            eiusmod tel incididunt ut lab et dolore mag aliqua.
                        </p>
                        <a href="blog-detail" class="btn card-view-btn"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-card card">
                    <img
                        class="card-top-img"
                        src="{{ asset('assets/img/home/blog-img3.png') }}"
                    />
                    <div class="card-body">
                        <div class="news-clock">
                            <img
                                src="{{ asset('assets/img/home/clock.svg') }}"
                            />
                            <span>14 Sep, 2019</span>
                        </div>
                        <h5 class="card-title">
                            Lorem ipsum dolor sit amet conse.
                        </h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet con adipisic elit sed do
                            eiusmod tel incididunt ut lab et dolore mag aliqua.
                        </p>
                        <a href="blog-detail" class="btn card-view-btn"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
