@include('components.header')


<!-- Page Title
		============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>What's your pitch ?</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="mx-auto mb-0 clearfix" style="max-width: 550px;">

                <div class="clearfix">
                    <form id="pitch-form" name="pitch-form" class="row mb-0" action="{{route('pitch')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <h3>Create pitch</h3>
                            @if ($errors->has('account'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('account') }}.</div>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 form-group">
                            <label for="register-form-username">Pitcher:</label>
                            <fieldset disabled>
                            <input required type="text" id="register-form-username" name="pitcher" value="{{auth()->user()->name}}" class="form-control" placeholder=""/>
                            </fieldset>
                        </div>

                        <div class="col-12 form-group">
                            <label for="pitch-form-industry">Industry:</label>
                            @if ($errors->has('industry'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('industry') }}.</div>
                                </div>
                            @endif
                            <select required class="form-select required" name="industry" id="pitch-form-industry">
                                <option value="">Select Option</option>
                                <option value="Investor">Technology</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Education">Education</option>
                                <option value="Finance">Finance</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Medicine">Medicine</option>
                            </select>
                        </div>

                        <div class="col-12 form-group">
                            <label for="pitch-form-title">Title:</label>
                            @if ($errors->has('title'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('title') }}.</div>
                                </div>
                            @endif
                            <input required type="text" id="pitch-form-title" name="title" value="" class="form-control"/>
                        </div>

                        <div class="col-12 form-group">
                            <label for="pitch-form-target">Target Amount:</label>
                            @if ($errors->has('target'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('target') }}.</div>
                                </div>
                            @endif
                            <input required type="number" id="pitch-form-target" name="target" class="form-control" value="" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="pitch-form-about">About: (Max 250 Characters)</label>
                            @if ($errors->has('about'))
                                <div class="style-msg errormsg">
                                    <div class="sb-msg"><i class="icon-remove"></i> {{ $errors->first('about') }}.</div>
                                </div>
                            @endif
                            <textarea required id="pitch-form-about" name="about" class="form-control" maxlength="250" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d button-black m-0" id="pitch-form-submit" name="pitch-form-submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- #content end -->


@include('components.footer')
