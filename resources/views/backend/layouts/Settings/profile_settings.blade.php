@extends('backend.app')

@section('title', 'Profile Settings')

@section('content')
    {{--  ========== title-wrapper start ==========  --}}
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title">
                    <h2>Settings</h2>
                </div>
            </div>

            <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#0">Settings</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{--  ========== title-wrapper end ==========  --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card-style settings-card-1 mb-30">
                <div class="title mb-30 d-flex justify-content-between align-items-center">
                    <h6>My Profile</h6>
                    <button class="border-0 bg-transparent">
                        <i class="lni lni-pencil-alt"></i>
                    </button>
                </div>
                <div class="profile-info">
                    <div class="d-flex align-items-center mb-30">
                        <div class="profile-image">
                            <img src="{{ asset('backend/images/profile/profile-1.png') }}" alt="" />
                            <div class="update-image">
                                <input type="file" />
                                <label for=""><i class="lni lni-cloud-upload"></i></label>
                            </div>
                        </div>
                        <div class="profile-meta">
                            <h5 class="text-bold text-dark mb-10">{{ Auth::user()->name }}</h5>
                            <p class="text-sm text-gray">Web & UI/UX Design</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('update.profile') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="name">User Name</label>
                                    <input type="text" @error('name') is-invalid @enderror" name="name" id="name"
                                        value="{{ Auth::user()->name }}" placeholder="Full Name" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="email">Email</label>
                                    <input type="email" @error('email') is-invalid @enderror" placeholder="Email"
                                        name="email" id="email" value="{{ Auth::user()->email }}" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn primary-btn">Submit</button>
                            </div>
                        </div>
                    </form>


                    <hr class="mb-30">
                    <div class="mt-30 mb-10">
                        <h3>Update Your Password</h3>
                    </div>

                    <form method="POST" action="{{ route('update.Password') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="old_password">Current Password</label>
                                    <input type="password" @error('old_password') is-invalid @enderror"
                                        placeholder="Current Password" name="old_password" id="old_password" />
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="password">New Password</label>
                                    <input type="password" @error('password') is-invalid @enderror"
                                        placeholder="New Password" name="password" id="password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" name="password_confirmation"
                                        id="password_confirmation" />
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn primary-btn">Submit</button>
                                <a href="{{ route('dashboard') }}" class="btn danger-btn me-2">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
