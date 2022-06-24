@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">Post Category</span>
                            <a href="/postcategory/create" class="float-end btn btn-info">new post category</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{ $post->title }}</h4>
                                            </div>
                                            <div class="card-body"> {{ $post->description }} </div>
                                            <a href="" class="btn btn-success">read more</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
