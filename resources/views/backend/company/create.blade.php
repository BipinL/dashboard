@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span>General setting</span>
                            <a href="/company" class="btn btn-info float-end">back</a>
                        </div>
                        <div class="card-body">
                            <form action="/company"method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">news portals name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        placeholder="enter news portal name">
                                </div>
                                <div class="form-group">
                                    <label for="address">office address <span class="text-danger">*</span></label>
                                    <input id="address" class="form-control" type="text" name="address"
                                        placeholder="enter office address">

                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="text" name="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pan_no">Pan number </label>
                                            <input id="pan_no" class="form-control" type="text" name="pan_no"
                                                placeholder="enter pan number">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="registration_no">Registration number </label>
                                            <input id="registration_no" class="form-control" type="text"
                                                name="registration_no" placeholder="enter registration number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="information_registration_no">Information Registration number
                                            </label>
                                            <input id="information_registration_no" class="form-control" type="text"
                                                name="information_registration_no"
                                                placeholder="Enter information registration  number">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contact_no_for_adds">Contact number for adds </label>
                                            <input id="contact_no_for_adds" class="form-control" type="text"
                                                name="contact_no_for_adds" placeholder="Enter contact number for adds">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logo">Upload Logo</label>
                                            <input id="logo" class="form-control" type="file" name="logo">
                                        </div>
                                    </div>
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
