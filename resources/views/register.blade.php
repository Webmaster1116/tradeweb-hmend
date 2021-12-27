@extends('layouts.default')
<link rel="stylesheet" href="assets/css/home.css" />
<link rel="stylesheet" href="assets/css/list.css" />
<link rel="stylesheet" href="assets/css/auth.css" />
@section('content')
<section id="login">
    <div class="container">
        <div class="login-img">
            <img src="{{ asset('assets/img/auth/register.png') }}" />
        </div>
        <div class="login-form register-form">
            <div>
                <div class="title">Register</div>
            </div>
            <form method="POST" action="{{ route('register.custom') }}">
                @csrf
                <div class="login-input">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="name-input-group">
                        <div class="form-group has-feedback has-search">
                            <div>
                                <span
                                    class="fa fa-envelope form-control-feedback"
                                ></span>
                                <input
                                    type="text"
                                    class="form-control home-search"
                                    placeholder="First Name"
                                    name="first_name"
                                    required
                                    autofocus
                                />
                            </div>
                            @if ($errors->has('first_name'))
                            <span
                                class="text-danger"
                                >{{ $errors->first('first_name') }}</span
                            >
                            @endif
                        </div>

                        <div class="form-group has-feedback has-search">
                            <div>
                                <span
                                    class="fa fa-envelope form-control-feedback"
                                ></span>
                                <input
                                    type="text"
                                    class="form-control home-search"
                                    placeholder="Last Name"
                                    name="last_name"
                                    required
                                />
                            </div>
                            @if ($errors->has('last_name'))
                            <span
                                class="text-danger"
                                >{{ $errors->first('last_name') }}</span
                            >
                            @endif
                        </div>
                    </div>
                    <div
                        class="
                            form-group
                            has-feedback has-search has-full-input
                        "
                    >
                        <div>
                            <span
                                class="fa fa-envelope form-control-feedback"
                            ></span>
                            <input
                                type="email"
                                class="form-control signin-input"
                                placeholder="Email Address"
                                name="email"
                                required
                            />
                        </div>
                        @if ($errors->has('email'))
                        <span
                            class="text-danger"
                            >{{ $errors->first('email') }}</span
                        >
                        @endif
                    </div>
                    <div
                        class="
                            form-group
                            has-feedback has-search has-full-input
                        "
                    >
                        <div>
                            <span
                                class="fa fa-lock form-control-feedback"
                            ></span>
                            <input
                                class="form-control signin-input"
                                type="password"
                                class="form-control"
                                placeholder="Password"
                                name="password"
                                required
                            />
                        </div>
                        @if ($errors->has('password'))
                        <span
                            class="text-danger"
                            >{{ $errors->first('password') }}</span
                        >
                        @endif
                    </div>
                    <div
                        class="
                            form-group
                            has-feedback has-search has-full-input
                        "
                    >
                        <span class="fa fa-lock form-control-feedback"></span>
                        <input
                            class="form-control signin-input"
                            type="password"
                            class="form-control"
                            placeholder="Comfirm Password"
                            name="password_confirmation"
                            required
                        />
                    </div>
                </div>
                <div class="login-btn-group">
                    <div>
                        <button type="submit" class="orange-btn login-btn">
                            Create Account
                        </button>
                    </div>
                    <div class="social-login">
                        <img
                            src="{{ asset('assets/img/auth/facebook.svg') }}"
                        />
                        <div>Continue with Facebook</div>
                    </div>
                </div>
                <div class="login-register">
                    <span>Already registered? </span>
                    <a href="login">Login here</a>
                </div>
                <div class="register-text">
                    * We use your email address to send you notifications when a
                    Tradie has gotten in contact and provide you with tips and
                    tricks to improve your home
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

<!-- <section id="login">
    <div class="login-form register-form">
        <div class="login-header">
            <div>Register New Account</div>
            <span
                >Let's get you all set up so you can verify your personal
                account and begin setting up your profile.</span
            >
        </div>
        <form method="POST" action="{{ route('register.custom') }}">
            @csrf
            <div class="login-input register-input">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon register-addon"
                            ><i class="fa fa-user"></i
                        ></span>
                        <input
                            type="name"
                            class="form-control"
                            placeholder="Name"
                            name="name"
                            required
                            autofocus
                        />
                    </div>
                    @if ($errors->has('name'))
                    <span
                        class="text-danger"
                        >{{ $errors->first('name') }}</span
                    >
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"
                            ><i class="fa fa-envelope"></i
                        ></span>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Email"
                            name="email"
                            required
                        />
                    </div>
                    @if ($errors->has('email'))
                    <span
                        class="text-danger"
                        >{{ $errors->first('email') }}</span
                    >
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon register-addon"
                            ><i class="fa fa-phone"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Phone No."
                            name="phone"
                            required
                        />
                    </div>
                    @if ($errors->has('phone'))
                    <span
                        class="text-danger"
                        >{{ $errors->first('phone') }}</span
                    >
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon lock-addon"
                            ><i class="fa fa-lock"></i
                        ></span>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            name="password"
                            required
                        />
                    </div>
                    @if ($errors->has('password'))
                    <span
                        class="text-danger"
                        >{{ $errors->first('password') }}</span
                    >
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon lock-addon"
                            ><i class="fa fa-lock"></i
                        ></span>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Confirm Password"
                            name="password_confirmation"
                            required
                        />
                    </div>
                    @if ($errors->has('password'))
                    <span
                        class="text-danger"
                        >{{ $errors->first('password') }}</span
                    >
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label
                            ><input type="checkbox" name="terms" required /> I
                            agree to all <span>Terms & Conditions</span></label
                        >
                    </div>
                </div>
            </div>
            <div class="login-btn-group">
                <div>
                    <button type="submit" class="login-btn">
                        Register Now
                    </button>
                </div>
                <div><span>or register with</span></div>
                <div>
                    <a href="#"
                        ><img src="{{ asset('assets/img/auth/facebook.svg') }}"
                    /></a>
                    <a href="#"
                        ><img src="{{ asset('assets/img/auth/google.svg') }}"
                    /></a>
                    <a href="#"
                        ><img src="{{ asset('assets/img/auth/twitter.svg') }}"
                    /></a>
                </div>
            </div>
            <div class="login-register">
                <span>Already have an account?</span>
                <a href="login">Log In</a>
            </div>
        </form>
    </div>
</section> -->
