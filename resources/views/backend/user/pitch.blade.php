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
                                <th scope="col">Pitcher</th>
                                <th scope="col">Industry</th>
                                <th scope="col">Title</th>
                                <th scope="col">Target</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->user_id}}</td>
                                    <td>{{$value->pitcher}}</td>
                                    <td>{{$value->industry}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->target}}</td>
                                    <td>
                                        @if ($value->file_path)
                                            <a href="{{ route('file.download', $value->id) }}" class="btn btn-primary btn-sm">Download</a>
                                            <form action="{{ route('file.delete', $value->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm Delete Action?');">Delete</button>
                                            </form>
                                        @else
                                            No File
                                        @endif
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Confirm Delete Action?');" href="{{url('panel/pitches/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
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

