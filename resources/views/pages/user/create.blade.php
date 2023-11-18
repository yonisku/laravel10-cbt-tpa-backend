@extends('layouts.app')

@section('title', 'New User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Register</h2>
                <p class="section-lead">Please fill in the blank field below to create a new user.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="card-header">
                                    <h4>User Register Form</h4>
                                </div>
                                <div class="card-body">
                                    {{-- Name --}}
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Email --}}
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- Phone --}}
                                    <div class="form-group">
                                        <label>Phone Number (ID Format)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-phone"></i> &nbsp; (+62)
                                                </div>
                                            </div>
                                            <input type="text" name="phone" class="form-control phone-number"
                                                placeholder="812345679">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            {{-- Password --}}
                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="password"
                                                        class="form-control pwstrength @error('password') is-invalid @enderror"
                                                        data-indicator="pwindicator">
                                                </div>
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            {{-- Password Confirmation --}}
                                            <div class="form-group">
                                                <label>Password Confirmation</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                    </div>
                                                    <input id="password2" type="password"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        name="password_confirmation">
                                                </div>
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Role --}}
                                    <div class="form-group">
                                        <label class="form-label">Role</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="role" value="ADMIN"
                                                    class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="role" value="STAFF"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Staf</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="role" value="USER"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">User</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa-solid fa-address-card fa-lg"></i> &nbsp; Register
                                    </button>
                                    <button type="reset" class="btn btn-warning">
                                        <i class="fa-solid fa-arrow-rotate-right fa-lg"></i> &nbsp; Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
