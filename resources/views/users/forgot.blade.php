@include('components.header')


<!-- Page Title
		============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Recover account</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="clearfix">
                    <form id="login-form" name="login-form" class="row mb-0" action="{{route('forgot_password')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <h3>Recover your Account</h3>
                            @if ($errors->has('account'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('account') }}.</div>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 form-group">
                            <label for="login-form-email">Email:</label>
                            @if ($errors->has('email'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('email') }}.</div>
                                </div>
                            @endif
                            <input required type="email" id="login-form-email" name="email" value="{{old('email')}}" class="form-control" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="login-form-secret">Secret Answer:</label>
                            @if ($errors->has('secret'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('secret') }}.</div>
                                </div>
                            @endif
                            <input required type="text" id="login-form-secret" name="secret" value="" class="form-control" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose New Password:</label>
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
                            <button type="submit" class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="">Reset</button>
                            <a href="{{route('login')}}" class="float-end">Remember Password?</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- #content end -->


@include('components.footer')

