@include('components.header')


<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row clearfix">

                <div class="col-md-9">

                    <img src="{{asset('img/avatar.jpg')}}" class="alignleft img-circle img-thumbnail my-0" alt="Avatar" style="max-width: 84px;">

                    <div class="heading-block border-0">
                        <h3>Welcome Back</h3>
                        <span>{{auth()->user()->name}}</span>
                    </div>

                    <div class="clear"></div>

                    <div class="row clearfix">

                        <div class="col-lg-12">

                            <div class="tabs tabs-bb clearfix" id="tabs-profile">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tab-profile"><i class="icon-user"></i> Profile</a></li>
                                    <li><a href="#tab-password"><i class="icon-lock"></i> Password</a></li>
                                    <li><a href="#tab-settings"><i class="icon-cog"></i> Settings</a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tab-profile">
                                        <form class="row" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-process">
                                                <div class="css3-spinner">
                                                    <div class="css3-spinner-scaler"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Name:</label>
                                                <input type="text" name="jobs-application-name" id="jobs-application-name" class="form-control required" value="{{auth()->user()->name}}" placeholder="Enter your Full Name">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label>Email:</label>
                                                <input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="{{auth()->user()->email}}" placeholder="Enter your Email">
                                            </div>
                                            <div class="col-12 form-group">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label>Phone:</label>
                                                        <input type="number" name="jobs-application-phone" id="jobs-application-phone" class="form-control required" value="" placeholder="Enter your Phone">
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="country">Country:</label>
                                                        <select class="form-select required" name="country" id="country">
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Åland Islands">Åland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload CV (JPG only):</label>
                                                    <input type="file" id="jobs-application-resume" name="jobs-application-resume" accept="image/jpeg" class="file-loading form-select required" data-show-preview="false" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Describe Yourself:</label>
                                                    <textarea name="jobs-application-message" id="jobs-application-message" class="form-control required" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 d-none">
                                                <input type="text" id="jobs-application-botcheck" name="jobs-application-botcheck" value="" />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="jobs-application-submit" class="btn btn-secondary">Update Info</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="jobs-application-">
                                        </form>
                                    </div>
                                    <div class="tab-content clearfix" id="tab-password">
                                        <div class="accordion accordion-lg mx-auto mb-0 clearfix" style="max-width: 550px;">

                                            <div class="accordion-header">
{{--                                                <div class="accordion-icon">--}}
{{--                                                    <i class="accordion-closed icon-lock3"></i>--}}
{{--                                                    <i class="accordion-open icon-unlock"></i>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="accordion-content clearfix">
                                                <form id="password-form" name="password-form" class="row mb-0" action="{{route('change_user_password')}}" method="POST">
                                                    @csrf
                                                    <div class="col-12 form-group">
                                                        <label for="old_password">Current Password:</label>
                                                        <input type="password" id="old_password" name="old_password" value="" class="form-control" />
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="new_password">New Password:</label>
                                                        <input type="password" id="new_password" name="new_password" value="" class="form-control" />
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="password_confirmation">Re-enter New Password:</label>
                                                        <input type="password" id="password_confirmation" name="new_password_confirmation" value="" class="form-control" />
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <button type="submit" class="button button-3d button-black m-0" id="password-form-submit" name="password-form-submit" value="register">Change Password</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tab-settings">
                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input p-2" type="checkbox" role="switch" id="notificationSwitch" checked>
                                                        <label class="form-check-label" for="notificationSwitch">Notifications</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input p-2" type="checkbox" role="switch" id="newsLetterSwitch" checked>
                                                        <label class="form-check-label" for="newsLetterSwitch">Newsletter</label>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input p-2" type="checkbox" role="switch" id="reminderSwitch" checked>
                                                        <label class="form-check-label" for="reminderSwitch">Reminders</label>
                                                    </div>

                                                </div>


{{--                                                <div class="form-check form-switch">--}}
{{--                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>--}}
{{--                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Notifications</label>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <label for="notification_switch">Notifications:</label><br>--}}
{{--                                                    <input id="notification_switch" class="bt-switch" type="checkbox" checked data-on-text="Yes" data-off-text="No" data-on-color="info" data-off-color="danger">--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <label for="newsletter_switch">Newsletter:</label><br>--}}
{{--                                                    <input id="newsletter_switch" class="bt-switch" type="checkbox" checked data-on-text="Yes" data-off-text="No" data-on-color="info" data-off-color="danger">--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <label for="reminder_switch">Reminders:</label><br>--}}
{{--                                                    <input id="reminder_switch" class="bt-switch" type="checkbox" checked data-on-text="Yes" data-off-text="No" data-on-color="info" data-off-color="danger">--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

{{--                <div class="w-100 line d-block d-md-none"></div>--}}

{{--                <div class="col-md-3">--}}

{{--                    <div class="fancy-title topmargin title-border mb-3">--}}
{{--                        <h4>About Me</h4>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum laboriosam, dignissimos veniam obcaecati. Quasi eaque, odio assumenda porro explicabo laborum!</p>--}}

{{--                    <div class="list-group">--}}
{{--                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between"><div>Wallet</div><i class="icon-money"></i></a>--}}
{{--                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between"><div>Messages</div><i class="icon-envelope2"></i></a>--}}
{{--                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between"><div>Logout</div><i class="icon-line2-logout"></i></a>--}}
{{--                    </div>--}}

{{--                </div>--}}

            </div>

        </div>
    </div>
</section>
<!-- #content end -->

@include('components.footer')
