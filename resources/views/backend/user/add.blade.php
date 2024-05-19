@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')

    <section class="section">
        <div class="row">


            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add User</h5>

                        <form class="row g-3" action="" method="POST">
                        @csrf
                            <div class="col-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" required name="name" id="inputName" value="{{old('name')}}">
                                <div style="color:red">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required id="inputEmail" value="{{old('email')}}">
                                <div style="color:red">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required id="inputPassword">
                                <div style="color:red">{{ $errors->first('password') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputType" class="form-label">Type</label>
                                <select class="form-select" required name="type" id="inputType">
                                    <option value="">Select Option</option>
                                    <option {{(old('type') === "Investor") ? 'selected' : ''}} value="Investor">Investor</option>
                                    <option {{(old('type') === "Entrepreneur") ? 'selected' : ''}} value="Entrepreneur">Entrepreneur</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputSecret" class="form-label">Secret</label>
                                <input type="text" class="form-control" name="secret" required id="inputSecret">
                                <div style="color:red">{{ $errors->first('secret') }}</div>
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

