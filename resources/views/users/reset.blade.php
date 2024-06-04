@include('components.header')



<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Change Password</h1>
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
                        Enter New Password
                    </div>
                </div>
                <div class="accordion-content clearfix">
                    <form id="register-form" name="register-form" class="row mb-0" action="" method="POST">
                        @csrf

                        <div class="col-12 form-group">
                            <label for="register-form-password">Choose Password:</label>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input type="password" id="register-form-repassword" name="password_confirmation" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button m-0" id="register-form-submit" name="register-form-submit" value="register">Reset Now</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- #content end -->

@include('components.footer')
