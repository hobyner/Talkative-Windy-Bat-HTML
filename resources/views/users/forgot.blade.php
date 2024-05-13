
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

            <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-lock3"></i>
                        <i class="accordion-open icon-unlock"></i>
                    </div>
                    <div class="accordion-title">
                        Access your account
                    </div>
                </div>
                <div class="accordion-content clearfix">
                    <form id="login-form" name="login-form" class="row mb-0" action="{{route('forgot_password')}}" method="POST">
                        @csrf
                        <div class="col-12 form-group">
                            <label for="login-form-email">Email:</label>
                            <input type="email" id="login-form-email" name="email" value="{{old('email')}}" class="form-control" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="login-form-secret">Secret Answer:</label>
                            <input type="text" id="login-form-secret" name="secret" value="{{old('email')}}" class="form-control" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose New Password:</label>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input type="password" id="register-form-repassword" name="password_confirmation" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button type="submit" class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="reset">Reset</button>
                            <a href="{{route('login')}}" class="float-end">Remember Password?</a>
                        </div>
                    </form>
                </div>

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-user4"></i>
                        <i class="accordion-open icon-ok-sign"></i>
                    </div>
                    <div class="accordion-title">
                        Don't have an account? Signup now
                    </div>
                </div>
                <div class="accordion-content clearfix">
                    <form id="register-form" name="register-form" class="row mb-0" action="{{route('users')}}" method="POST">
                        @csrf
                        <div class="col-12 form-group">
                            <label for="register-form-username">Name:</label>
                            <input type="text" id="register-form-username" name="name" value="{{old('name')}}" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-email">Email Address:</label>
                            <input type="email" id="register-form-email" name="email" class="form-control" value="{{old('email')}}" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose Password:</label>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input type="password" id="register-form-repassword" name="password_confirmation" value="" class="form-control" />
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

