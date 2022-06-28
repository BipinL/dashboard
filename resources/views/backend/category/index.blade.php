@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">Category</span>
                            <a href="/category/create" class="float-end btn btn-info">new category</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($categories as $category)
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{ $category->name }}</h4>
                                            </div>
                                            <div class="card-body"> {{ $category->slug }} </div>
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
