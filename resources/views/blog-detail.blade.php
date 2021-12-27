@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/blog.css" />

@section('content')
<section id="pageUrl">
    <div class="url-link">
        <span>Blogs Details</span>
    </div>
</section>
<section id="blogDetail">
    <div class="container">
        <div class="col-md-8 col-sm-12">
            <div class="col-md-12 col-sm-12">
                <img
                    class="blog-main-img"
                    src="{{ asset('assets/img/blog/detail1.svg') }}"
                />
                <div class="blog-detail-text">
                    <div class="blog-detail-header">
                        Lorem ipsum dolor sit amet conse.
                    </div>
                    <div class="blog-detail-content">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </div>
                    <div class="blog-detail-content">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </div>
                    <div class="blog-detail-content">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <img
                    class="blog-main-img"
                    src="{{ asset('assets/img/blog/detail2.svg') }}"
                />
                <div class="blog-detail-text">
                    <div class="blog-detail-content">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </div>
                    <div class="blog-detail-content">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-bar col-md-4 col-sm-12">
            <div class="information-filter blog-list">
                <div class="filter-content">
                    <div class="information-filter-header">Latest Posts</div>
                    <a href="blog-detail">
                        <div class="filter-checkbox blog-latest-post">
                            <div>
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/blog/blog-detail (1).svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div class="post-detail">
                                <span
                                    >What a Difference a Few <br />Months
                                    Make</span
                                >
                                <p>April 25, 2015</p>
                            </div>
                        </div>
                    </a>
                    <hr />
                    <a href="blog-detail">
                        <div class="filter-checkbox blog-latest-post">
                            <div>
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/blog/blog-detail (2).svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div class="post-detail">
                                <span>We are Offering the Best RED</span>
                                <p>October 22, 2021</p>
                            </div>
                        </div>
                    </a>
                    <hr />
                    <a href="blog-detail">
                        <div class="filter-checkbox blog-latest-post">
                            <div>
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/blog/blog-detail (3).svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div class="post-detail">
                                <span>Your ideas are very important to us</span>
                                <p>October 22, 2021</p>
                            </div>
                        </div>
                    </a>
                    <hr />
                    <a href="blog-detail">
                        <div class="filter-checkbox blog-latest-post">
                            <div>
                                <img
                                    src="{{
                                        asset(
                                            'assets/img/blog/blog-detail (4).svg'
                                        )
                                    }}"
                                />
                            </div>
                            <div class="post-detail">
                                <span>Architects design a Resort</span>
                                <p>October 22, 2021</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="filter-content">
                    <div class="information-filter-header">Categories</div>
                    <div class="detail-categories">
                        <div>
                            <span>Build</span>
                            <span>Designs</span>
                            <span>Flooring</span>
                        </div>
                        <div>
                            <span>Painting</span>
                            <span>Renovation</span>
                            <span>Repairs</span>
                        </div>
                        <div>
                            <span>Tiling</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
