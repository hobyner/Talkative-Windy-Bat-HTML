@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')



    <div class="pagetitle mb-3">
        <h1>CC</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        <!-- Table with stripped rows -->
                        <table class="table table-striped datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">UserId</th>
                                <th scope="col">Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Cvv</th>
                                <th scope="col">Expiry</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->user_id}}</td>
                                    <td>{{$value->number}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->cvv}}</td>
                                    <td>{{$value->expiry}}</td>
                                    <td>
{{--                                        <a onclick="return confirm('Confirm Delete Action?');" href="{{url('panel/user/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>--}}
                                    </td>
                                </tr>
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

