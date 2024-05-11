@extends('backend.app')

@section('title', 'System Settings')

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
@endpush

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

    <div class="form-layout-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-4">
                    <h6 class="mb-3">Contact Us</h6>
                    <form method="POST" action="{{ route('system.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="title">Title:</label>
                                    <input type="text" placeholder="Enter Title" id="title"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ $setting->title ?? '' }}" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="email">Email:</label>
                                    <input type="email" placeholder="Enter Email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $setting->email ?? '' }}" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="system_name">System Name:</label>
                                    <input type="text" placeholder="System Name" id="system_name"
                                        class="form-control @error('system_name') is-invalid @enderror" name="system_name"
                                        value="{{ $setting->system_name ?? '' }}" />
                                    @error('system_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="copyright_text">Copy Rights Text:</label>
                                    <input type="text" placeholder="Copy Rights Text" id="copyright_text"
                                        class="form-control @error('copyright_text') is-invalid @enderror"
                                        name="copyright_text" value="{{ $setting->copyright_text ?? '' }}" />
                                    @error('copyright_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="logo">Logo:</label>
                                    <input type="file" class="dropify @error('logo') is-invalid @enderror"
                                        name="logo" id="logo"
                                        data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset" />
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-style-1">
                                    <label for="favicon">Favicon:</label>
                                    <input type="file" class="dropify @error('favicon') is-invalid @enderror"
                                        name="favicon" id="favicon"
                                        data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset" />
                                    @error('favicon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="description">About System:</label>
                                    <textarea placeholder="Type here..." id="description" name="description"
                                        class="form-control @error('description') is-invalid @enderror">
                                        {{ $setting->description ?? '' }}
                                    </textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('dashboard') }}" class="btn btn-danger w-100">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
