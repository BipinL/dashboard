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
                            <form action="/post"method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Category <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title"
                                        placeholder="enter news category">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Select Category</label>
                                    <select id="category_id" class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="$category->id"> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div>




                                <button type="submit" class="btn btn-info">Save record</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
