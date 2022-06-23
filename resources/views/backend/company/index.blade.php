@extends('backend.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="fw-bold fs-2">General Setting</span>
                            <a href="/company/create" class="float-end btn btn-info">add company details</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">news portals name</th>
                                        <th class="fw-bold">office address</th>
                                        <th class="fw-bold">contact number for adds</th>
                                        <th class="fw-bold">Email</th>
                                        <th class="fw-bold">Pan number</th>
                                        <th class="fw-bold">action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($company))
                                        <tr>
                                            <td> {{ $company->name }} </td>
                                            <td>
                                                {{ $company->address }}
                                            </td>
                                            <td>
                                                {{ $company->contact_no_for_adds }}
                                            </td>
                                            <td>
                                                {{ $company->email }}
                                            </td>
                                            <td>
                                                {{ $company->pan_no }}
                                            </td>
                                            <th>
                                                <form action="/company/{{ $company->id }} " method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/company/{{ $company->id }}/edit"
                                                        class="btn btn-info">edit</a>

                                                    <button type="submit" class="btn btn-danger">delete</button>
                                                </form>
                                            </th>
                                        </tr>
                                    @endif
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
