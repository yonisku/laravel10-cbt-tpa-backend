@extends('layouts.app')

@section('title', 'Questions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Bank Soal Tugas 2 - Yonis Kurniawan</h1>
                <div class="section-header-button">
                    <a href="{{ route('question.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Questions</a></div>
                    <div class="breadcrumb-item">All</div>
                </div>
            </div>
            <div class="section-body">
                @if (Session::has('message'))
                    <div class="col-12">
                        @include('components.alert')
                    </div>
                @endif
                <h2 class="section-title">Questions</h2>
                <p class="section-lead">
                    You can manage all Questions, such as editing, deleting and more.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Question List</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option selected disabled>Action For Selected</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form action="{{ route('question.index') }}" method="GET">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="q">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>(A)</th>
                                            <th>(B)</th>
                                            <th>(C)</th>
                                            <th>(D)</th>
                                        </tr>
                                        @if (count($questions) > 0)
                                            @foreach ($questions as $question)
                                                <tr>
                                                    <td>{{ $question->id }}</td>
                                                    <td>{{ $question->name }}</td>
                                                    <td>{{ $question->answer_a }}</td>
                                                    <td>{{ $question->answer_b }}</td>
                                                    <td>{{ $question->answer_c }}</td>
                                                    <td>{{ $question->answer_d }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">No Data Found.</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>

                                <div class="float-right">
                                    {{ $questions->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
