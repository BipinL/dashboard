@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span>Post</span>
                            <a href="/post" class="btn btn-info float-end">back</a>
                        </div>
                        <div class="card-body">
                            <form action="/post/ {{ $post->id }} "method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        placeholder="enter news title" value=" {{ $post->title }} ">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input id="slug" class="form-control" type="text" name="slug"
                                        value=" {{ $post->slug }} ">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea id="description" class="form-control" name="description" rows="3"> {{ $post->description }} </textarea>
                                </div>
                                {{-- <div class="row">
                                    <div class="my-2">
                                        <img src=" {{asset($post->image)}} " alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="image">Upload Image</label>
                                            <input id="image" class="form-control" type="file" name="image"
                                                accept="image/jpg,image/png">
                                        </div>
                                    </div>
                                </div> --}}
                                <button type="submit" class="btn btn-info">Save record</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
