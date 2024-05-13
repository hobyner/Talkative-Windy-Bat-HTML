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

            <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-lock3"></i>
                        <i class="accordion-open icon-unlock"></i>
                    </div>
                    <div class="accordion-title">
                        Login to your Account
                    </div>
                </div>
                <div class="accordion-content clearfix">
                    <form id="login-form" name="login-form" class="row mb-0" action="{{route('authenticate')}}" method="POST">
                        @csrf
                        <div class="col-12 form-group">
                            <label for="login-form-email">Email:</label>
                            <input type="email" id="login-form-email" name="email" value="{{old('email')}}" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="login-form-password">Password:</label>
                            <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                            <a href="{{route('forgot')}}" class="float-end">Forgot Password?</a>
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
                            <label for="register-form-type">Type:</label>
                            <select class="form-select required" name="type" id="register-form-username">
                                <option value="">Select Option</option>
                                <option value="Investor">Investor</option>
                                <option value="Entrepreneur">Entrepreneur</option>
                            </select>
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-username">Name:</label>
                            <input type="text" id="register-form-username" name="name" value="{{old('name')}}" class="form-control required" />
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
                            <label for="register-form-secret">Secret:</label>
                            <input type="text" id="register-form-secret" name="secret" value="{{old('secret')}}" class="form-control" />
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
