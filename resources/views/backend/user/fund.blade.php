@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')

    <section class="section">
        <div class="row">


            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fund User</h5>

                        <form class="row g-3" action="" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="inputName" class="form-label">Amount (client-balance: {{$getRecord->balance}})</label>
                                <input type="text" value="" class="form-control" name="amount" required id="inputName" placeholder="Enter amount here">
                                <div style="color:red">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                  <input type="email" class="form-control" value="{{$getRecord->email}}" name="email" disabled id="inputEmail">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword" class="form-label">AdminKey</label>
                                <input type="text" class="form-control" name="key" id="inputPassword" placeholder="Enter secret here">
                            </div>
                            <div class="text-center">
                                <button onclick="return confirm('Confirm Funding Action?');"  type="submit" class="btn btn-primary">Submit</button>
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

