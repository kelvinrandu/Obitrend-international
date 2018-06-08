@extends('layouts.app')

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->

    @if(Session::has('message'))
        <div class="alert alert-success"><em> {!! session('message') !!}</em></div>
    @endif

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('client.index') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Make request</span>

                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
<!--
<b style=" padding:.3em; font-size:15px;color:white"> </b>
<input style="border:1px solid" type="text" onfocus="true"  name="fiil" id="fiil" value=""size="30" /> -->

                    <div class="portlet light " id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red bold uppercase"> Make request -
                                    <span class="step-title"> Step 1 of 4 </span>
                                </span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                              <form class="form-horizontal" action="{{route('create.announcement')}}" id="submit_form" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Select country </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Make announcement </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i>Payment</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 4 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Confirm </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success"> </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide details below</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Title
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="address" />
                                                        <span class="help-block"> Provide the title of your announcement </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Country</label>
                                                    <div class="col-md-4">
                                                        <select name="country" id="country_list" class="form-control">
                                                            <option value=""></option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegowina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Cote d'Ivoire</option>
                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard and Mc Donald Islands</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran (Islamic Republic of)</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macau</option>
                                                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint LUCIA</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Announcement Type</label>
                                                    <div class="col-md-4">
                                                        <select name="fullname" id="type" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Deathannouncement">Death announcement</option>
                                                            <option value="Missingperson">Missing persons</option>
                                                            <option value="Missingchild">Missing child</option>
                                                            <option value="PublicNotice">Public notice</option>
                                                            <option value="Anniversaries">Anniversaries</option>


                                                        </select>
                                                        <div class="Deathannouncement box">

                                                                                                          <div class="form-group">
                                                                                                              <label class="control-label col-md-4">
                                                                                                                  <span class="required"> * </span>
                                                                                                              </label>
                                                                                                              <div class="col-md-4">
                                                                                                                  <input type="text" class="form-control" name="paybill" />
                                                                                                                  <span class="help-block"> Provide paybill </span>
                                                                                                              </div>
                                                                                                          </div>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Provide Announcement details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Description</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" rows="3" maxlength= "500" name="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Picture
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">

                                                          <label for="exampleInputFile1">File input</label>
                                                          <input type="file" name="image_thumb" >


                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone Number
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="phone" />
                                                        <span class="help-block"> Provide your phone number </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">location
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="location" />
                                                        <span class="help-block"> Provide a location  </span>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <h3 class="block">Provide your payment token</h3>


                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Payment token
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="" class="form-control" name="card_name" />
                                                        <span class="help-block"> </span>
                                                    </div>
                                                </div>


                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Number of days
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">

                                                          <input type="number" min="1" name="days" id="uploadData" onChange="fileSelect();" / >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">image of your id
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                          <label for="exampleInputFile1">File input</label>
                                                          <input type="file" name="image_path" >
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                                    <label class="control-label col-md-3">Downloadables
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                          <label for="exampleInputFile1">File input</label>
                                                          <input type="file" name="file" >
                                                    </div>
                                                    @if ($errors->has('file'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('file') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>


                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h3 class="block">Confirm your request</h3>
                                                <h4 class="form-section">Request</h4>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Username:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="username">{{Auth::user()->first_name}} {{Auth::user()->other_names}}  </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Type of announcement:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="fullname"> </p>
                                                    </div>
                                                </div>
                                                <!-- <h4 class="form-section">Profile</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Fullname:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="fullname"> </p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Gender:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="gender"> </p>
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="phone"> </p>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3">Title:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="address"> </p>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">City/Town:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="city"> </p>
                                                    </div> -->

                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Country:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="country"> </p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Remarks:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="remarks"> </p>
                                                    </div>
                                                </div> -->

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Payment Token:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="card_name"> </p>
                                                    </div>

                                                </div>
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Card Number:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="card_number"> </p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">CVC:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="card_cvc"> </p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Expiration:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="card_expiry_date"> </p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label class="control-label col-md-3">Payment Options:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="payment[]"> </p>
                                                    </div>-->
                                                    <!-- <div class="pesapal">
                                                    <p>If you click on the "Hide" button, I will disappear.</p>
                                                      </div>

                                  <button id="hide">Hide</button>
                                  <button id="show">Show</button> -->
                                  <!-- start here -->

                                    <input hidden="" name="currency_code" value="USD" />

                                    <input hidden="" name="amount" id="amount"  value="" />

                                      <input hidden="" name="type" value="MERCHANT" readonly="readonly" />
                                     <input hidden="" name="desc" id="desc" value="" />
                                      <input hidden="" name="reference" value="001" />

                                      <input hidden="" name="first_name" value="John" />

                                      <input hidden="" name="last_name" value="Doe" />

                                      <input hidden="" name="email" value="john@yahoo.com" />



                                  <!-- end here -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
<button class="btn green button-submit" type="submit">Finish!</button>
                                                <!-- <a href="javascript:;"type="submit" class="btn green button-submit"> Submit
                                                    <i class="fa fa-check"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>


@endsection
