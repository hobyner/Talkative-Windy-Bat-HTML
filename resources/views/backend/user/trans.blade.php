@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')



    <div class="pagetitle mb-3">
        <h1>Pitches</h1>
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
                                <th scope="col">Rout</th>
                                <th scope="col">Acct</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->user_id}}</td>
                                    <td>{{$value->rout}}</td>
                                    <td>{{$value->acct}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>
                                        <a onclick="return confirm('Confirm Delete Action?');" href="{{url('panel/trans/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

