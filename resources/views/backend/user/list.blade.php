@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')


    <div class="pagetitle mb-3">
        <h1>Users List</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Users
                            <a href="{{url('panel/user/add')}}" class="btn btn-primary mt-0" style="float: right">Add User</a>
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Secret</th>
                                <th scope="col">Status</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($getRecord as $value)
                            @if(!$value->is_admin)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->type}}</td>
                                    <td>{{$value->secret}}</td>
                                    <td>{{($value->status == 1) ? 'Active' : 'Inactive' }}</td>
                                    <td>${{$value->balance}}</td>
                                    <td>
                                        <a href="{{url('panel/category/fund/'.$value->id)}}" class="btn btn-success btn-sm">Fund</a>
                                        <a href="{{url('panel/user/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a onclick="return confirm('Confirm Delete Action?');" href="{{url('panel/user/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endif
                            @empty
                                <tr>
                                    <td colspan="100%">Record not found.</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('script')
@endsection
