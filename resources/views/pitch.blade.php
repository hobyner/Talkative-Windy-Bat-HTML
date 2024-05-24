@include('components.header')


<!-- Page Title
		============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Sign up</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="clearfix">
                    <form id="register-form" name="register-form" class="row mb-0" action="{{route('users')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <h3>Create your account</h3>
                            @if ($errors->has('account'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('account') }}.</div>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-type">Type:</label>
                            <select class="form-select required" name="type" id="register-form-username">
                                <option value="">Select Option</option>
                                <option value="Investor">Investor</option>
                                <option value="Entrepreneur">Entrepreneur</option>
                            </select>
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-username">First & Last Name:</label>
                            @if ($errors->has('name'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('name') }}.</div>
                                </div>
                            @endif
                            <input required type="text" id="register-form-username" name="name" value="{{old('name')}}" class="form-control" placeholder="John Doe" title="Enter your first and last name"/>
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-email">Email Address:</label>
                            @if ($errors->has('email'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('email') }}.</div>
                                </div>
                            @endif
                            <input required type="email" id="register-form-email" name="email" class="required email sm-form-control" value="{{old('email')}}" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose Password:</label>
                            @if ($errors->has('password'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('password') }}.</div>
                                </div>
                            @endif
                            <input required type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input required type="password" id="register-form-repassword" name="password_confirmation" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-secret">Secret:</label>
                            @if ($errors->has('secret'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('secret') }}.</div>
                                </div>
                            @endif
                            <input required type="text" id="register-form-secret" name="secret" value="{{old('secret')}}" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- #content end -->


@include('components.footer')
