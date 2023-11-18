@extends('layouts.app')

@section('title', 'New Question')

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
                <h1>Create New Question</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Create</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Submit Question</h2>
                <p class="section-lead">Please fill in the blank field below and submit to create a new question.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ route('question.store') }}" method="POST">
                                @csrf
                                <div class="card-header">
                                    <h4>Question Form</h4>
                                </div>
                                <div class="card-body">
                                    {{-- Question Name --}}
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

                                    {{-- Category --}}
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="category" value="Numeric"
                                                    class="selectgroup-input" checked>
                                                <span class="selectgroup-button">Numeric</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="category" value="Verbal"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Verbal</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="category" value="Logical"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Logical</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            {{-- A --}}
                                            <div class="form-group">
                                                <label>(A)</label>
                                                <input type="text" name="answer_a"
                                                    class="form-control @error('answer_a') is-invalid @enderror">
                                                @error('answer_a')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- B --}}
                                            <div class="form-group">
                                                <label>(B)</label>
                                                <input type="text" name="answer_b"
                                                    class="form-control @error('answer_b') is-invalid @enderror">
                                                @error('answer_b')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            {{-- C --}}
                                            <div class="form-group">
                                                <label>(C)</label>
                                                <input type="text" name="answer_c"
                                                    class="form-control @error('answer_c') is-invalid @enderror">
                                                @error('answer_c')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- D --}}
                                            <div class="form-group">
                                                <label>(D)</label>
                                                <input type="text" name="answer_d"
                                                    class="form-control @error('answer_d') is-invalid @enderror">
                                                @error('answer_d')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Answer Key --}}
                                    <div class="form-group">
                                        <label class="form-label">Key</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="answer_key" value="A"
                                                    class="selectgroup-input" checked>
                                                <span class="selectgroup-button">A</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="answer_key" value="B"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">B</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="answer_key" value="C"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">C</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="answer_key" value="D"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">D</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
