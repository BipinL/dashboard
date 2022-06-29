@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span>Category</span>
                            <a href="/category" class="btn btn-info float-end">back</a>
                        </div>
                        <div class="card-body">
                            <form action="/category"method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="category_name"
                                        placeholder="enter category name">
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
