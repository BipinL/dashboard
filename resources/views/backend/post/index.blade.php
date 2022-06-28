@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">Post</span>
                            <a href="/post/create" class="float-end btn btn-info">new post</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>{{ $post->title }}</h4>
                                            </div>
                                            <div class="card-body"> {!! $post->description !!} </div>

                                            <div class="d-flex ">
                                                @csrf
                                                @method('delete')
                                                <a href="/post/{{ $post->id }}/edit " class="btn btn-info m-2">edit</a>


                                                <button type="submit" class="btn btn-danger m-2">delete</button>


                                            </div>

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
