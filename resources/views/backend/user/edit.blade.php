@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')

    <section class="section">
        <div class="row">


            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User</h5>

                        <form class="row g-3" action="" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" value="{{$getRecord->name}}" class="form-control" name="name" required id="inputName">
                                <div style="color:red">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" value="{{$getRecord->email}}" class="form-control" name="email" required id="inputEmail">
                                <div style="color:red">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="inputPassword">
                            </div>
                            <div class="col-12">
                                <label for="inputType" class="form-label">Type</label>
                                <select class="form-select required" name="type" id="inputType">
                                    <option value="">Select Option</option>
                                    <option {{($getRecord->type === 'Investor') ? 'selected' : '' }} value="Investor">Investor</option>
                                    <option {{($getRecord->type === 'Entrepreneur') ? 'selected' : '' }} value="Entrepreneur">Entrepreneur</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputSecret" class="form-label">Secret</label>
                                <input type="text" value="{{$getRecord->secret}}" class="form-control" name="secret" required id="inputSecret">
                            </div>
                            <div class="col-12">
                                <label for="inputStatus" class="form-label">Status</label>
                                <select class="form-select required" name="status" id="inputStatus">
                                    <option value="">Select Option</option>
                                    <option {{($getRecord->status == 1) ? 'selected' : '' }} value="1">Active</option>
                                    <option {{($getRecord->status == 0) ? 'selected' : '' }} value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection

