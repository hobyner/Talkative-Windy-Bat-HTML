@include('components.header')


<!-- Page Title
		============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Welcome</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="clearfix">
                    <form id="login-form" name="login-form" class="row mb-0" action="{{route('authenticate')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <h3>Login to your Account</h3>
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
                                    <i class="icon-remove"></i> {{ $errors->first('email') }}.
                                </div>
                            @endif
                            <input required type="email" id="login-form-email" name="email" value="{{old('email')}}" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="login-form-password">Password:</label>
                            @if ($errors->has('password'))
                                <div class="style-msg errormsg">
                                    <i class="icon-remove"></i> {{ $errors->first('password') }}.
                                </div>
                            @endif
                            <input required type="password" id="login-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                            <a href="{{route('forgot')}}" class="float-end">Forgot Password?</a>
                        </div>

                        <div class="col-12">
                            <h3>Don't have an account ? <a href="{{route('signup')}}"> SIGNUP HERE</a></h3>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
</section>
<!-- #content end -->



@include('components.footer')
