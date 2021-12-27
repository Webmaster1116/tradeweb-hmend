@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/list.css" />
@section('content')
<section id="list">
    <div class="list-business">
        <div class="title">List your Business</div>
        <div class="name-input-group">
            <div class="form-group has-feedback has-search">
                <span class="fa fa-envelope form-control-feedback"></span>
                <input
                    type="text"
                    class="form-control home-search"
                    placeholder="First Name"
                />
            </div>
            <div class="form-group has-feedback has-search">
                <span class="fa fa-envelope form-control-feedback"></span>
                <input
                    type="text"
                    class="form-control home-search"
                    placeholder="Last Name"
                />
            </div>
        </div>
        <div class="form-group has-feedback has-search has-full-input">
            <span class="fa fa-envelope form-control-feedback"></span>
            <input
                type="text"
                class="form-control home-search"
                placeholder="Email Address"
            />
        </div>
        <div class="form-group has-feedback has-search has-full-input">
            <span class="fa fa-lock form-control-feedback"></span>
            <input
                type="text"
                class="form-control home-search"
                placeholder="Your business size"
            />
        </div>
        <div class="form-group has-feedback has-search has-full-input">
            <span class="fa fa-lock form-control-feedback"></span>
            <input
                type="text"
                class="form-control home-search"
                placeholder="What is your business name?"
            />
        </div>
        <div class="form-group has-feedback has-search has-full-input">
            <span class="fa fa-lock form-control-feedback"></span>
            <input
                type="text"
                class="form-control home-search"
                placeholder="Select a Trade"
            />
        </div>
        <div class="form-group has-feedback has-search has-full-input">
            <span class="fa fa-lock form-control-feedback"></span>
            <input
                type="text"
                class="form-control home-search"
                placeholder="How did you hear about us? "
            />
        </div>
        <div>
            <button class="orange-btn submit-list">Submit</button>
        </div>
    </div>
</section>

@endsection
