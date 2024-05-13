@include('components.header')



<!-- Account Section Starts Here -->
<section class="account-section padding-top padding-bottom">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7  d-none d-lg-block">
                <div class="account-thumb">
                    <img src="{{ asset('assets/images/account/login-thumb.png') }}" alt="account">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="account-wrapper">
                    <h2 class="title">Create Your Account</h2>
                    <form method="POST" action="{{route('users')}}" class="account-form">
                        @csrf
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <select class="form--control" name="type">
                                <option value="">Select Option</option> <!-- Provide a default option -->
                                <option value="investor">Investor</option>
                                <option value="entrepreneur">Entrepreneur</option>
                            </select>
                            @error('type')
                            <p class="text-red-500 text-xs mt-1">Invalid Type</p>
                            @enderror
                        </div>
                        <div class="form--group">
                            <i class="las la-user"></i>
                            <input type="text" class="form--control" placeholder="Username" name="name"
                                   value="{{old('name')}}"/>
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">Invalid Email</p>
                            @enderror
                        </div>
                        <div class="form--group">
                            <i class="las la-user"></i>
                            <input type="email" class="form--control" placeholder="Email" name="email"
                                   value="{{old('email')}}"/>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">Invalid Email</p>
                            @enderror
                        </div>
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <input type="password" class="form--control" placeholder="Password" name="password"
                                   value="{{old('password')}}"/>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">Invalid Password</p>
                            @enderror
                        </div>
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <input type="password" class="form--control" placeholder="Re - Password"
                                   name="password_confirmation">
                            @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">Password don't match</p>
                            @enderror
                        </div>
                        <div class="form--group">
                            <i class="las la-lock"></i>
                            <input type="text" class="form--control" placeholder="Secret" name="secret"
                                   value="{{old('secret')}}"/>
                            @error('secret')
                            <p class="text-red-500 text-xs mt-1">Invalid Secret</p>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="form--group custom--checkbox ">
                                <input type="checkbox" id="check01" name="checkbox"/>
                                @error('checkbox')
                                <p class="text-red-500 text-xs mt-1">Agree To Terms and Conditions</p>
                                @enderror
                                <label for="check01">I agree with all <a class="text--primary"
                                                                         href="{{ route('terms') }}">Terms &
                                        Conditions</a></label>
                            </div>
                        </div>
                        <div class="form--group">
                            <button class="custom-button">REGISTRATION</button>
                        </div>
                    </form>
                    <span class="subtitle">Already you have an account here?</span>
                    <a href="{{route('login')}}" class="create-account theme-four">Sign in</a>
                    <div class="shape">
                        <img src="{{ asset('assets/images/account/shape.png') }}" alt="account">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Account Section Ends Here -->


@include('components.footer')
