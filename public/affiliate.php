<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="vendors/bootstrap/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/twitter_core.css" />
<link rel="stylesheet" type="text/css" href="css/nanoscroller.css" />
<!-- temp bring the styles into here so we can see what is actually used -->
<!-- link rel="stylesheet" type="text/css" href="css/style.css" /  -->

<script type="text/javascript" src="vendors/jquery/jquery.min.js"></script>    
<script src="js/jquery.date-dropdowns.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap/bootstrap.min.js"></script>

<title>Login</title>
</head>

<body>
<div class="span-19"> 
  
  <!-- Note 
	- these views will eventually be in separate files loaded in by jQuery 
	  based on the affiliates locale and device (so devices and./or locales may 
	  end up using different views for same form
--> 

<!-- affiliate login view -->
<div id="content_affiliate_login" class="js_content_section">
	<form id="login-form" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo1"><img src="images/diary_logo1.png" /></p>
				</div>				
				
				<div class="form-group inner-addon">
					<p><strong>Affiliate Login</strong></p>
				</div>
				<div id="error_message" class="form-group errormsgbox" style="text-align:left; display:none;"></div>
				<div class="clearfix"></div>
				<div class="form-group inner-addon left-addon">
					<input class="form-control" placeholder="Your username or email Address" name="LoginForm[username]" id="LoginForm_username" type="text" required autofocus />
					<i class="glyphicon glyphicon-user"></i> 
				</div>
				<div class="form-group inner-addon left-addon">
					<input class="form-control" placeholder="Your password..." name="LoginForm[password]" id="LoginForm_password" type="password" required />
						<i class="glyphicon glyphicon-lock"></i> 
				</div>
				<div class="form-group">
					<input type="submit" value="SIGN IN" class="btn btn-primary js_login_button">
				</div>
			</div>
			
	<div id="auth-links" class="auth-links" >
		<div class="auth-links-inner">
			<a href="#!signup" class = "js_signup_button" style="color:#7A878F">Need an account? Sign up here...</a> | 
			<a href="password" style="color:#7A878F">Lost your password?</a> 
		</div>
	</div>
			
		</div>
	</form>

</div>
<!-- end div for class = content_affiliate_login --> 
<!-- end of affiliate login view --> 
<!-- --------------------------------------------------------------------------------- --> 


<!-- affiliate signup view -->
<div id="content_affiliate_signup" class="js_content_section"> 
	
	<!-- page 1 of signup - display this form initially -->
	<form id="login-form1" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo1"><img src="images/diary_logo1.png" /></p>
				</div>				
				<div class="form-group">
					<p><strong>Please enter your details below</strong></p>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Your email address..." name="LoginForm[email]" id="LoginForm_email" type="text" required autofocus />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Your user name..." name="LoginForm[username]" id="LoginForm_username" type="text" required />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Your password..." name="LoginForm[password]" id="LoginForm_password" type="password" required />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Repeat your password..." name="LoginForm[retypepassword]" id="LoginForm_retypepassword" type="password" required />
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Your real name..." name="LoginForm[username]" id="LoginForm_username" type="text" required />
				</div>
				<div class="form-group">
					<input type="submit" value="CANCEL" class="btn btn-default js_sign_cancel">
					<input type="submit" value="SIGN UP" class="btn btn-primary ">
				</div>
				<p class="signup_footer" > 
					By completing this form you agree to our <a href="#">Terms of Use</a>,
					<a href="#">Acceptable Usage Policy</a> and <a href="#">Privacy Policy</a>
				</p>
			</div>
		</div>
	</form>
	<!-- page 2 of signup, initially this is hidden -->
	<form id="login-form2" action="" method="post" style = "display:none;">
		<div class="modal-content form-signin" style="height:auto;">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo1"><img src="images/diary_logo1.png" /></p>
				</div>
				
				<div class="form-group">
					<p><strong>Welcome</strong>, please create a short profile</p>
				</div>
                
                <div class="form-group">
					<input class="form-control" placeholder="Organization Name" name="organization" id="organization" type="text" required autofocus />
				</div>
                
                <div class="form-group">
					<input class="form-control" placeholder="Address 1 ..." name="address1" id="address1" type="text" required />
				</div>
                
                <div class="form-group">
					<input class="form-control" placeholder="Address 2 ..." name="address2" id="address2" type="text" />
				</div>
                
                <div class="form-group col-md-6" style="padding-left:0; padding-right:5px;">
					<input class="form-control" placeholder="City ..." name="city" id="city" type="text" />				
				</div>
				<div class="form-group col-md-6" style="padding-left:0; padding-right:0;">
					<input class="form-control" placeholder="State..." name="state" id="state" type="text" />
				</div>
				<div class="clearfix"></div>
                
                		  
				<div class="form-group col-md-6" style="padding-left:0; padding-right:5px;">
				<select class="form-control" name="country" id="country">
					<option value="">Select Country</option>
					<option value="9">Saudi Arabia</option>
					<option value="284">United Arab Emirates</option>
					<option value="21">Qatar</option>
					<option value="11">Oman</option>
					<option value="12">Kuwait</option>
					<option value="95">Egypt</option>
					<option value="20">Bahrain</option>
					<option value="18">Lebanon</option>
					<option value="28">Afghanistan</option>
					<option value="29">Albania</option>
					<option value="30">Algeria</option>
					<option value="31">American Samoa</option>
					<option value="32">Andorra</option>
					<option value="33">Angola</option>
					<option value="34">Anguilla</option>
					<option value="35">Antarctica</option>
					<option value="36">Antigua and Barbuda</option>
					<option value="37">Argentina</option>
					<option value="38">Armenia</option>
					<option value="39">Aruba</option>
					<option value="40">Ashmore and Cartier</option>
					<option value="41">Australia</option>
					<option value="42">Austria</option>
					<option value="43">Azerbaijan</option>
					<option value="44">Baker Island</option>
					<option value="45">Bangladesh</option>
					<option value="46">Barbados</option>
					<option value="47">Bassas da India</option>
					<option value="48">Belarus</option>
					<option value="49">Belgium</option>
					<option value="50">Belize</option>
					<option value="51">Benin</option>
					<option value="52">Bermuda</option>
					<option value="53">Bhutan</option>
					<option value="54">Bolivia</option>
					<option value="56">Botswana</option>
					<option value="57">Bouvet Island</option>
					<option value="58">Brazil</option>
					<option value="60">British Virgin Islands</option>
					<option value="61">Brunei Darussalam</option>
					<option value="62">Bulgaria</option>
					<option value="63">Burkina Faso</option>
					<option value="64">Burma</option>
					<option value="65">Burundi</option>
					<option value="66">Cambodia</option>
					<option value="67">Cameroon</option>
					<option value="68">Canada</option>
					<option value="69">Cape Verde</option>
					<option value="70">Cayman Islands</option>
					<option value="71">Central African Republic</option>
					<option value="72">Chad</option>
					<option value="73">Chile</option>
					<option value="74">China</option>
					<option value="75">Christmas Island</option>
					<option value="76">Clipperton Island</option>
					<option value="77">Cocos (Keeling) Islands</option>
					<option value="78">Colombia</option>
					<option value="79">Comoros</option>
					<option value="80">Congo</option>
					<option value="81">Cook Islands</option>
					<option value="82">Coral Sea Islands</option>
					<option value="83">Costa Rica</option>
					<option value="84">Cote d'Ivoire</option>
					<option value="85">Croatia</option>
					<option value="86">Cuba</option>
					<option value="87">Cyprus</option>
					<option value="88">Czech Republic</option>
					<option value="89">Denmark</option>
					<option value="90">Djibouti</option>
					<option value="91">Dominica</option>
					<option value="92">Dominican Republic</option>
					<option value="93">East Timor</option>
					<option value="94">Ecuador</option>
					<option value="96">El Salvador</option>
					<option value="97">Equatorial Guinea</option>
					<option value="98">Eritrea</option>
					<option value="99">Estonia</option>
					<option value="100">Ethiopia</option>
					<option value="101">Europa Island</option>
					<option value="103">Faroe Islands</option>
					<option value="104">Fiji</option>
					<option value="105">Finland</option>
					<option value="106">France</option>
					<option value="107">French Guiana</option>
					<option value="108">French Polynesia</option>
					<option value="110">Gabon</option>
					<option value="111">Gaza Strip</option>
					<option value="112">Georgia</option>
					<option value="113">Germany</option>
					<option value="114">Ghana</option>
					<option value="115">Gibraltar</option>
					<option value="116">Glorioso Islands</option>
					<option value="117">Greece</option>
					<option value="118">Greenland</option>
					<option value="119">Grenada</option>
					<option value="120">Guadeloupe</option>
					<option value="121">Guam</option>
					<option value="122">Guatemala</option>
					<option value="123">Guernsey</option>
					<option value="124">Guinea</option>
					<option value="125">Guinea-Bissau</option>
					<option value="126">Guyana</option>
					<option value="127">Haiti</option>
					<option value="129">Holy See (Vatican City)</option>
					<option value="130">Honduras</option>
					<option value="131">Hong Kong (SAR)</option>
					<option value="132">Howland Island</option>
					<option value="133">Hungary</option>
					<option value="134">Iceland</option>
					<option value="135">India</option>
					<option value="136">Indonesia</option>
					<option value="13">Iran</option>
					<option value="14">Iraq</option>
					<option value="137">Ireland</option>
					<option value="138">Israel</option>
					<option value="139">Italy</option>
					<option value="140">Jamaica</option>
					<option value="141">Jan Mayen</option>
					<option value="142">Japan</option>
					<option value="143">Jarvis Island</option>
					<option value="144">Jersey</option>
					<option value="145">Johnston Atoll</option>
					<option value="17">Jordan</option>
					<option value="146">Juan de Nova Island</option>
					<option value="147">Kazakhstan</option>
					<option value="148">Kenya</option>
					<option value="149">Kingman Reef</option>
					<option value="150">Kiribati</option>
					<option value="151">Korea</option>
					<option value="152">Kyrgyzstan</option>
					<option value="153">Laos</option>
					<option value="154">Latvia</option>
					<option value="155">Lesotho</option>
					<option value="156">Liberia</option>
					<option value="157">Libya</option>
					<option value="158">Liechtenstein</option>
					<option value="159">Lithuania</option>
					<option value="160">Luxembourg</option>
					<option value="161">Macao</option>
					<option value="162">Macedonia</option>
					<option value="163">Madagascar</option>
					<option value="164">Malawi</option>
					<option value="165">Malaysia</option>
					<option value="166">Maldives</option>
					<option value="167">Mali</option>
					<option value="168">Malta</option>
					<option value="169">Man</option>
					<option value="170">Marshall Islands</option>
					<option value="171">Martinique</option>
					<option value="172">Mauritania</option>
					<option value="173">Mauritius</option>
					<option value="174">Mayotte</option>
					<option value="175">Mexico</option>
					<option value="176">Micronesia</option>
					<option value="177">Midway Islands</option>
					<option value="178">Miscellaneous (French)</option>
					<option value="179">Moldova</option>
					<option value="180">Monaco</option>
					<option value="181">Mongolia</option>
					<option value="182">Montenegro</option>
					<option value="183">Montserrat</option>
					<option value="184">Morocco</option>
					<option value="185">Mozambique</option>
					<option value="186">Myanmar</option> 
					<option value="187">Namibia</option>
					<option value="188">Nauru</option>
					<option value="189">Navassa Island</option>
					<option value="190">Nepal</option>
					<option value="191">Netherlands</option>
					<option value="192">Netherlands Antilles</option>
					<option value="193">New Caledonia</option>
					<option value="194">New Zealand</option>
					<option value="195">Nicaragua</option>
					<option value="196">Niger</option>
					<option value="197">Nigeria</option>
					<option value="198">Niue</option>
					<option value="199">Norfolk Island</option>
					<option value="200">Northern Mariana Islands</option>
					<option value="201">Norway</option>
					<option value="2">Pakistan</option>
					<option value="202">Palau</option>
					<option value="203">Palestinian Territory</option>
					<option value="204">Palmyra Atoll</option>
					<option value="205">Panama</option>
					<option value="206">Papua New Guinea</option>
					<option value="207">Paracel Islands</option>
					<option value="208">Paraguay</option>
					<option value="209">Peru</option>
					<option value="210">Philippines</option>
					<option value="211">Pitcairn Islands</option>
					<option value="212">Poland</option>
					<option value="213">Portugal</option>
					<option value="214">Puerto Rico</option>
					<option value="215">Romania</option>
					<option value="216">Russia</option>
					<option value="217">Rwanda</option>
					<option value="218">Saint Helena</option>
					<option value="219">Saint Kitts and Nevis</option>
					<option value="220">Saint Lucia</option>
					<option value="221">Saint Pierre and Miquelon</option>
					<option value="223">Samoa</option>
					<option value="224">San Marino</option>
					<option value="225">Senegal</option>
					<option value="226">Serbia</option>
					<option value="227">Serbia and Montenegro</option>
					<option value="228">Seychelles</option>
					<option value="229">Sierra Leone</option>
					<option value="230">Singapore</option>
					<option value="231">Slovakia</option>
					<option value="232">Slovenia</option>
					<option value="233">Solomon Islands</option>
					<option value="234">Somalia</option>
					<option value="235">South Africa</option>
					<option value="237">Spain</option>
					<option value="238">Spratly Islands</option>
					<option value="239">Sri Lanka</option>
					<option value="240">Sudan</option>
					<option value="241">Suriname</option>
					<option value="242">Svalbard</option>
					<option value="243">Swaziland</option>
					<option value="244">Sweden</option>
					<option value="245">Switzerland</option>
					<option value="15">Syria</option>
					<option value="246">Taiwan</option>
					<option value="247">Tajikistan</option>
					<option value="248">Tanzania</option>
					<option value="249">Thailand</option>
					<option value="250">The Bahamas</option>
					<option value="251">The Gambia</option>
					<option value="252">Togo</option>
					<option value="253">Tokelau</option>
					<option value="254">Tonga</option>
					<option value="255">Trinidad and Tobago</option>
					<option value="256">Tromelin Island</option>
					<option value="257">Tunisia</option>
					<option value="19">Turkey</option>
					<option value="258">Turkmenistan</option>
					<option value="259">Turks and Caicos Islands</option>
					<option value="260">Tuvalu</option>
					<option value="261">Uganda</option>
					<option value="262">Ukraine</option>
					<option value="263">United Kingdom</option>
					<option value="264">United States</option>
					<option value="266">Uruguay</option>
					<option value="267">Uzbekistan</option>
					<option value="268">Vanuatu</option>
					<option value="269">Venezuela</option>
					<option value="270">Vietnam</option>
					<option value="271">Virgin Islands</option>
					<option value="272">Virgin Islands (UK)</option>
					<option value="273">Virgin Islands (US)</option>
					<option value="274">Wake Island</option>
					<option value="275">Wallis and Futuna</option>
					<option value="276">West Bank</option>
					<option value="277">Western Sahara</option>
					<option value="278">Western Samoa</option>
					<option value="279">World</option>
					<option value="16">Yemen</option>
					<option value="280">Yugoslavia</option>
					<option value="281">Zaire</option>
					<option value="282">Zambia</option>
					<option value="283">Zimbabwe</option>
			</select>
				
				</div>
				<div class="form-group col-md-6" style="padding-left:0; padding-right:0;">
					<input class="form-control" placeholder="Zip or Postal Code..." name="LoginForm[pin]" id="LoginForm_pin" type="text" />
				</div>
				<div class="clearfix"></div>
				
				<div class="form-group">
					<input class="form-control" placeholder="Tax ID..." name="taxid" id="taxid" type="text" />
				</div>
				
				<div class="form-group">
					<input type="button" value="BACK" class="btn btn-default js_signup_back">
					<input type="submit" value="SAVE" class="btn btn-primary">
				</div>
				<p class="signup_footer" > 
					By completing this form you agree to our <a href="#">Terms of Use</a>, 
					<a href="#">Acceptable Usage Policy</a> and <a href="#">Privacy Policy</a>
				</p>
			</div>
		</div>
	</form>
	<div id="signin-links" class="auth-links" style="color:#7A878F" >
		<div class="auth-links-inner"> <a href="affiliate.php">Already have an account? Sign in here...</a> </div>
	</div>
</div>
<!-- end div for class = content_affiliate_signup --> 
 
<!-- end of affiliate signup view --> 
<!-- --------------------------------------------------------------------------------- --> 
  
<!-- affiliate welcome view -->
<div id="content_affiliate_welcome" class="js_content_section">
	<form id="login-form" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo1"><img src="images/diary_logo1.png" /></p>
				</div>
				<i class="icon-ok"></i>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p style="height:20px;">&nbsp; </p>
				<div class="form-group">
					<input type="submit" value="Start Now" class="btn btn-primary js_startnow_button">
				</div>
			</div>
		</div>
	</form>
</div>
<!-- end div for class = content_affiliate_welcome --> 
  
<!-- end of affiliate welcome view --> 
<!-- --------------------------------------------------------------------------------- --> 
  
<!-- event entry view -->
<div id="content_affiliate_events" class="js_content_section">
	<div class="modal-content form-signin">
		<div class="row logo_row">
		
			<div class="global-nav" data-section-term="top_nav">
				<div class="global-nav-inner">
					<div class="">
						<div role="navigation" style="display: inline-block;">
							<ul class="nav js-global-actions" id="global-actions">
								<li id="global-nav-home" style="height:70px;" class="home active" data-global-action="home"> 
                                	<div class="col-md-2 user_dashboard" style="cursor:pointer;" ><img class="logo" style="margin-left:40px"  src="images/diary_logo1.png" width="20%" /></div>
								</li>
								<li class="dm-nav" data-global-action="connect"> 
									<a data-original-title="" class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="#"> <i class="fa fa-user fa-2x newIcon"></i> <span class="text">User: John Doe</span></a>
								</li>
								<li class="dm-nav"> 
									<a data-original-title="" role="button" href="#" class="js-tooltip js-dynamic-tooltip global-dm-nav" data-placement="bottom"> <i class="fa fa-asterisk fa-2x newIcon"></i><span class="text">Level: Silver</span> <span class="dm-new"><span class="count-inner"></span></span> </a>
								</li>
								<li class="dm-nav">
									<a data-original-title="" role="button" href="#" class="js-tooltip js-dynamic-tooltip global-dm-nav" data-placement="bottom"> <i class="fa fa-certificate fa-2x newIcon"></i> <span class="text">Points: 12,550</span> <span class="dm-new"><span class="count-inner"></span></span> </a> 
								</li>
							</ul>
						</div>
						<div class="pull-right search-box" style="">
							<div role="search">
								<form class="t1-form form-search js-search-form" action="/search" id="global-nav-search">
									<label class="visuallyhidden" for="search-query">Search query</label>
									<input aria-owns="typeahead-dropdown-25" aria-expanded="false" aria-autocomplete="list" class="search-input" id="search-query" placeholder="Search" name="q" autocomplete="off" spellcheck="false" type="text">
										<span class="search-icon js-search-action">
											<button tabindex="-1" type="submit" class="newIcon glyphicon glyphicon-search nav-search"> <span class="visuallyhidden">Search Twitter</span> </button>
										</span>
									<div id="typeahead-dropdown-25" role="listbox" class="dropdown-menu typeahead">
										<div aria-hidden="true" class="dropdown-caret">
											<div class="caret-outer"></div>
                                            <div class="caret-inner"></div>
										</div>				   
									</div>
								</form>
							</div>
							<ul class="nav right-actions">
								<li role="complementary" aria-labelledby="global-new-tweet-button" class="topbar-tweet-btn">
									<span class="dropdown" style="position: absolute; top: 0; right: 20px;">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="images/icon_menu_chrome.png" /></a>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:" class="js_settings_button">Settings</a>
													<a href="javascript:" class="js_help_button">Help</a>
													<a href="javascript:" class="js_about_button">About</a>
													<a href="javascript:" class="js_logout_button">Logout</a>
												</li>
											</ul>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="navbar_custom">
			<ul class="nav nav-tabs ">
				<li>
					<a href="javascript:" class="js_addevent_button">Add Events</a>
				</li>
				<li>
					<a href="javascript:" class="js_seeoffer_button">See Offers</a>
				</li>
				<li>
					<a href="javascript:" class="js_history_button">History</a>
				</li>
				<li>
					<a href="javascript:" class="js_friend_button">Friends</a>
				</li>

			</ul>
		</div>
		<div class="clearfix"></div>
		
		
		<div class="modal-body nano" id="dashboard" style="overflow-y: auto; overflow-x: hidden; height: 400px;" >
		<div class="nano-content">
			<div class="col-md-8">
		
			<form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
			<ul class="post-types">
				<li class="post-type">
					<a class="status" title="" href="#"><i class="glyphicon glyphicon-file"></i> Share an Update</a>
				</li>
				<li class="post-type">
					<a class="photos" href="#"><i class="glyphicon glyphicon-camera"></i> Add photos</a>
				</li>
			</ul>
			<div class="share">
				<div class="arrow"></div>
				<div class="panel panel-default">
					  <div class="panel-heading"><i class="glyphicon glyphicon-file"></i> Update Status</div>
					  <div class="panel-body">
						<div class="">
							<textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea>
						</div>
					  </div>
						<div class="panel-footer">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<div class="btn-group">
											  <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-map-marker"></i> Location</button>
											  <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-picture"></i> Photo</button>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group" style="margin-left:58px; width:100%;">
											<select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
												<option value="1" selected="selected">Public</option>
												<option value="2">Only my friends</option>
												<option value="3">Only me</option>
											</select>									
											<input type="button" name="submit" value="Post" class="btn btn-primary">							  
										</div>
									</div>
								</div>
						</div>
					</div>
			</div>
			
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/paul.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Paul Redman</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/waqar.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Waqar Khan</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/paul.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Paul Redman</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/waqar.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Waqar Khan</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/paul.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Paul Redman</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<div class="share">
				
				<div class="panel panel-default feed-panel">
					  <div class="panel-heading">
					  <div class="col-md-1" style="margin-right:5px;"><img src="images/waqar.jpg" height="50" width="50"  /></div>
					  <div class="col-md-10">
					  		<strong>Waqar Khan</strong> <br />
							April 23, 2015
					  </div>
						
					   </div>
					   <div class="clearfix"></div>
					  <div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						
						<div>
							<span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> -
							<span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> -
							<span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span>
						</div>
						
						
					  </div>
						<div class="panel-footer">
								<div class="row">
									&nbsp;									
								</div>
						</div>
					</div>
			</div>
			
			<span id="append_more"></span>
			<div class="share" id="load_more" style="text-align: center; display:none;">
				<img src="images/progress.gif">			   
			</div>
			
			
		</form>
		</div>
	
			<div class="col-md-4 ads" >
				
				<span class="sponser_ads"> Ads</span>
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
			
		   		<div class="form-group">
					<h4>Commander Binoculars‎</h4>
					<p><a href="#">www.steiner-optics.com</a>‎</p>
					<p>Free $235 flashlight with purchase
						of Commander or Wildlife XP Binoss
					 </p>   
				</div>
				
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
				
				<div class="form-group">
					<h4>Commander Binoculars‎</h4>
					<p><a href="#">www.steiner-optics.com</a>‎</p>
					<p>Free $235 flashlight with purchase
						of Commander or Wildlife XP Binoss
					 </p>   
				</div>			
		</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
			$(".nano").bind("scrollend", function(e){
				ui_affiliate.load_more();
			});
			$(".nano").nanoScroller();
			$('.status').click(function() { $('.arrow').css("left", 0);});
			$('.photos').click(function() { $('.arrow').css("left", 146);});
			
		});
   </script>	 
		
		
		<div class="modal-body" id="event_activity" style="display:none;">
			<div class="col-md-8">
				<div class="form-group">
				<p><strong>Enter your activity here...</strong> </p>
			</div>
				<form id="login-form" action="" method="post">
				<div class="form-group">
					<select class="js_action_list form-control" name="action_type" id="action_type">
						<option value="0">Select Action...</option>
						<option value="1">WOKE-UP</option>
						<option value="2">BREAKFAST</option>
						<option value="3">PLANNED</option>
						<option value="4">READ-BOOK</option>
						<option value="5">GYM</option>
						<option value="6">WORK</option>
						<option value="7">LUNCH/DINNER</option>
						<option value="8">RESEARCH</option>
					</select>
				</div>
				<div id="action_dropdown_id_1"> </div>
				<div id="appendme"> </div>
				<div id="form_2" style="display:none;">
					<div class="form-group">
						<input class="form-control" placeholder="Woke up..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Book..." name="general[breakfast]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Read..." cols="6" rows="12"></textarea>
					</div>
				</div>
				<div id="form_3" style="display:none;">
					<div class="form-group">
						<input class="form-control" placeholder="Woke up..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Gym..." name="general[breakfast]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Work..." name="general[breakfast]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Lunch..." cols="6" rows="12"></textarea>
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Research..." cols="6" rows="12"></textarea>
					</div>
				</div>
				<div id="form_4" style="display:none;">
					<div class="form-group">
						<input class="form-control" placeholder="Woke up..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Exercise..." name="general[breakfast]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Exercises..." cols="6" rows="12"></textarea>
					</div>
				</div>
				<div id="form_5" style="display:none;">
					<div class="form-group">
						<input class="form-control" placeholder="Woke up..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Shopping..." name="general[breakfast]" id="LoginForm_email" type="text" required autofocus />
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="What have to be shopped..." cols="6" rows="12"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="button" onclick="" value="SUBMIT" class="btn btn-primary js_submit_event" >
				</div>
			</form>
			</div>
			<div class="col-md-4 ads" style="overflow: auto; height: 400px;">
				
				<span class="sponser_ads"> Ads</span>
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
			
		   		<div class="form-group">
					<h4>Commander Binoculars‎</h4>
					<p><a href="#">www.steiner-optics.com</a>‎</p>
					<p>Free $235 flashlight with purchase
						of Commander or Wildlife XP Binoss
					 </p>   
				</div>
				
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
				
				<div class="form-group">
					<h4>Commander Binoculars‎</h4>
					<p><a href="#">www.steiner-optics.com</a>‎</p>
					<p>Free $235 flashlight with purchase
						of Commander or Wildlife XP Binoss
					 </p>   
				</div>			
		</div>
		</div>
		

		
		<div class="modal-body" id="event_detail_view" style="display:none;">
			<div class="col-md-8">
				<div class="form-group">
			<p>
				<strong>Enter detail for <span id="event_detail_name"> ...</span> </strong> </p>
		</div>
				<div id="event_detail_append"></div>
				<div class="form-group">
			<input type="submit" value="BACK" class="btn btn-default js_eventdetail_back">
			<input type="submit" value="SAVE-EVENT" style="width:40%;" class="btn btn-primary js_save_event_button">
		</div>
			</div>
			<div class="col-md-4 ads" style="overflow: auto; height: 400px;">
				<span class="sponser_ads"> Sponsored Ads</span>
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
				<div class="form-group">
					<h4>Commander Binoculars‎</h4>
					<p><a href="#">www.steiner-optics.com</a>‎</p>
					<p>Free $235 flashlight with purchase
						of Commander or Wildlife XP Binoss
					 </p>   
				</div>
				<div class="form-group">
					<h4>Binoculars for Sale‎</h4>
					<p><a href="#">www.bearbasin.com</a>‎</p>
					<p>100s of Binoculars Ready To Ship
						Ask For One Year 0% Easy Pay
					 </p>   
				</div>
				
			</div>
		</div>
	
		<div class="modal-body  auth-form-inner_offer" id="offer" style="display:none;">
			<div class="form-group offer_text">
				<p><strong>Your new offers will be listed below after a short delay...</strong> </p>
								<div style="overflow: auto; height: 250px;" class="table-responsive">
									<table class="offer_table table table-striped">
									</table>
								</div>
				<div id="offer_error_message"></div>
			</div>
						<div class="form-group">
							&nbsp;	  
						</div>
						<div class="text-center">
							<input type="button" value="CANCEL" class="btn btn-default js_eventdetail_back" />
							<input type="button" value="ACCEPT OFFERS" style="width:20%; margin-left:10px;" class="btn btn-primary js_history_button" />
						</div>
		</div>
		<div class="modal-body  auth-form-inner_offer" id="history" style="display:none">
			
			<div class="form-group history_text">
				<p><strong>Your offers history will be listed below after a short delay...</strong> </p>
					<div style="overflow: auto; height: 250px;">
						<table class="history_table history_table table table-striped">
						</table>
					</div>
				<div id="history_error_message"></div>									
			</div>
			
		 
		<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Modal title</h4>
			  </div>
			  <div class="modal-body">
				
				<div class="form-group">
						<div class="col-md-3">
							ID:
						</div>
						<div class="col-md-9" id="history_id">
 								01													  
						</div>					
			   </div>
				
				<div>
			  	&nbsp;
			  </div>
				
				<div class="form-group">
						<div class="col-md-3">
							Date:
						</div>
						<div class="col-md-9" id="history_date">
 								2015-04-30													   
						</div>					
			   </div>
			   
			   <div>
			  	&nbsp;
			  </div>
				
			   <div class="form-group">

			   		<div class="col-md-3" >
							Information:
					</div>
						<div class="col-md-9" id="history_information">
						Amazon
						</div>					
					</div>	
					
				<div>
			  	&nbsp;
			  </div>	
				
					
				
					
				<div class="form-group">

			   		<div class="col-md-3">
							Status:
					</div>
						<div class="col-md-9" id="history_status">
						Accept
						</div>					
					</div>																  
			   </div>
			  <div class="modal-footer ">
			  <div>
			  	&nbsp;
			  </div>
			  <div class="form-group">
			  	<div class="col-md-3"></div>
				<div class="col-md-9">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
				</div>
			  </div>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div>	
		</div>
		
		<div class="modal-body" id="settings" style="display:none">
			<div class="form-group">
				<div class="mainbox">
			
					<div class="boxhead col-xs-12 col-sm-12">
						<h5>Settings</h5> 

					</div>

					<div class="row">
						<div class="col-sm-12 col-md-12"> 
							<div class="table-responsive">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							</div>
						</div>		   
					</div>	
				</div>
			</div>
		</div>
		
		<div class="modal-body " id="help" style="display:none">
			<div class="form-group">
				
							<div class="mainbox">
			
								<div class="boxhead col-xs-12 col-sm-12">
									<h5>Help</h5> 

								</div>

								<div class="row">
									<div class="col-sm-12 col-md-12"> 
										<div class="table-responsive">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
									</div>		   
								</div>	

							</div>
							
							
			</div>
		</div>
		<div class="modal-body " id="about" style="display:none">
			<div class="form-group">
				
							<div class="mainbox">
			
								<div class="boxhead col-xs-12 col-sm-12">
									<h5>About</h5> 

								</div>

								<div class="row">
									<div class="col-sm-12 col-md-12"> 
										<div class="table-responsive">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
									</div>		   
								</div>	

							</div>
							
			</div>
		</div>
		
		<div class="modal-body " id="friends" style="display:none">
			<div class="form-group">
				
							<div class="mainbox">
			
								<div class="boxhead col-xs-12 col-sm-12">
									<h5>Friends</h5> 

								</div>

								<div class="row">
									<div class="col-sm-12 col-md-12"> 
										<div class="table-responsive">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
										</div>
									</div>		   
								</div>	

							</div>
							
							
			</div>
		</div>
	</div>
<!--
	<div id="auth-links" class="auth-links" > <a href="user.php" style="color:#7A878F">Go back to home... </a> </div>   
-->
<!-- /container -->
</div>
<!-- end div for class = content_affiliate_events --> 
<!-- end of affiliate events view --> 
<!-- --------------------------------------------------------------------------------- --> 
  
</div>
<div class="span-5 last">
	<div id="sidebar"> </div>
	<!-- sidebar --> 
</div>

<script>


var global_event_name =  "";
// jquery ready function
$(function() {
	$("#date-of-birth").dateDropdowns();
	$(".js_content_section").hide();
	$("#content_affiliate_login").show();
	
	$(document).on('scroll', '#page-scroll', function(){
		alert(545);
	});
	/*$("#page-scroll").on("scroll", function (){
		alert(1236546);
	});*/
	/*$("#page-scroll").scroll(function() {
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
		   alert("bottom!");
	   }
	});*/	
	ui_affiliate.init();
});


// object literal for affiliate functions and views
	ui_affiliate = {
		// object variables
		global_action_value:  [],
		global_action_section: [],
		global_action_number: 1,
		global_event_name: "",
		
		/*-----------------------------------------
		// init
		-------------------------------------------*/
		init: function() {
			v_msg = "DEBUG: running process_login";
			ui_log.log("AUDIT", "ui_affiliate", "process_login", v_msg);
			
			// load and show login screen
			ui_affiliate.login_init();
			ui_affiliate.login_show_view();
			
			// lazy load and initialize
			ui_affiliate.signup_init();
			
			//ui_affiliate.welcome_init();
			
			ui_affiliate.events_init();
			
		
		}, 
		
		global_process_logo_click: function() {
			location.href="affiliate.php";
		},
		
		/*-----------------------------------------
		// login_init
		-------------------------------------------*/
		login_init: function() {
		
			// set events
			//$(".logo").on("click", ui_affiliate.global_process_logo_click);
			
			$(".user_dashboard").on("click", ui_affiliate.dashboard_show_view);
			
			$(".js_login_button").on("click", ui_affiliate.login_process_request);
			
			$(".js_signup_button").on("click", ui_affiliate.signup_show_view);
			
			$(".js_submit_event").on("click", ui_affiliate.event_detail_show_view);
			
			$(".js_sign_cancel").on("click", ui_affiliate.login_show_view);
			
			$(".js_signup_back").on("click", ui_affiliate.signup_show_back);
			
			$(".js_startnow_button").on("click", ui_affiliate.events_show_view);
						
			$(".js_addevent_button").on("click", ui_affiliate.events_activity_view);
					
			$(".js_seeoffer_button").on("click", ui_affiliate.seeoffer_show_view);
			
			$(".js_history_button").on("click", ui_affiliate.history_show_view);
			
			$(".js_friend_button").on("click", ui_affiliate.friend_show_view);			
						
			$(".js_settings_button").on("click", ui_affiliate.settings_show_view);
						
			$(".js_help_button").on("click", ui_affiliate.help_show_view);
						
			$(".js_about_button").on("click", ui_affiliate.about_show_view);
			
			$(".js_logout_button").on("click", ui_affiliate.login_show_view);
			
			$(".js_eventdetail_back").on("click", ui_affiliate.event_detail_back_button);
			
			$(".js_save_event_button").on("click", ui_affiliate.save_event_show_view);
			
			$(document).on('click', '#selecctall', function(){
				
				if(this.checked) { // check select status
					$('.checkbox').each(function() { //loop through each checkbox
						this.checked = true;  //select all checkboxes with class "checkbox1"			  
						 $(this).closest("tr").addClass("checked_row");
					});
				}else{
					$('.checkbox').each(function() { //loop through each checkbox
						this.checked = false; //deselect all checkboxes with class "checkbox1"					  
						$(this).closest("tr").removeClass("checked_row");
					});		
				}
				
			});
			
			
			$(document).on('click', '.history_table tr', function(){
				
				var id	 		= $(this).closest('tr').find('.c01').text();
				var date 		= $(this).closest('tr').find('.c02').text();
				var information = $(this).closest('tr').find('.c03').text();
				var status 		= $(this).closest('tr').find('.c04').text();
				$("#history_id").html(id);
				$("#history_date").html(date);
				$("#history_information").html(information);
				$("#history_status").html(status);
				$('#myModal').modal('toggle');
				
				
			});
			
			
			
		},
		
		/*-----------------------------------------
		// login_show_view
		-------------------------------------------*/
		login_show_view: function() {
			$(".form-signin").css("max-width", "510px");
			$(".js_content_section").hide();
			$("#content_affiliate_login").show();
		},

		/*-----------------------------------------
		// login_process_request
		-------------------------------------------*/
		login_process_request: function(e) {
		
			e.preventDefault();
			
			v_msg = "DEBUG: running login_process_request";
			ui_log.log("AUDIT", "ui_affiliate", "login_process_request", v_msg);
			
			// all ajax calls go thru this interface
			api.do_ajax(		"index", 						// module
								"user_login", 						// action
								{ 									// request data - validate at server
									token:			1,
									username: 		$("#LoginForm_username").val(),
									password:		$("#LoginForm_password").val(),
									browser:		"",
									window_height:	$(window).height(),
									window_width:	$(window).width()
								}, 
								ui_affiliate.login_process_response		// callback function
			);
			

			v_msg = "DEBUG: after ajax call";
			ui_log.log("AUDIT", "ui_affiliate", "setEvents", v_msg);

		},
		
		
		/*================================================================================
		// login_process_response
		==================================================================================*/
		login_process_response: function(json_data) {
			console.log("AJAX login_process_response = " + JSON.stringify(json_data));
			var v_status=json_data.status;
			if (v_status == "OK") {
				//window.location="event_entry.php";
				$(".js_content_section").hide();
				$("#content_affiliate_events").show();
				
				// adjust screen width
				$(".form-signin").css("max-width", "80%");
			} 
			else if(v_status == "FAIL") {
				$("#error_message").html('<span>Invalid user name or password.</span>');
				$("#error_message").show().fadeOut(3000);			
			}
			
			// process json error
			if (json_data.errortype == "APP") {
				alert(
					"<br><br>The login or password is incorrect. <br><br>Please try again<br><br>"
				);
				$("#login input[name='userid']").focus();
			}
			
		},
		
		/*-----------------------------------------
		// signup_init
		-------------------------------------------*/
		signup_init: function() {
			
			// set events
			$("#login-form1").on("submit", function( e ) {
				e.preventDefault();
				ui_affiliate.signup_show_view1();
			});
			
			$("#login-form2").on("submit", function( e ) {
				e.preventDefault();
				ui_affiliate.welcome_show_view();
			});
			
		},
		
		/*-----------------------------------------
		// signup_show_view
		-------------------------------------------*/
		signup_show_view: function() {
			
			$(".js_content_section").hide();
			$("#content_affiliate_signup").show();
		},
		
		/*-----------------------------------------
		// event_detail_show_view
		-------------------------------------------*/
		event_detail_show_view: function() {			
			var action_type = $("#action_type").val();
			var selected_event_opton = $( "#action_type option:selected" ).text();
			global_event_name = selected_event_opton;
			
			
			ui_affiliate.events_add_action(action_type);
			//$(".js_content_section").hide();
			//$("#content_affiliate_signup").show();
		},
		

		/*-----------------------------------------
		// signup_show_view1
		-------------------------------------------*/
		signup_show_view1: function() {
			$(".js_content_section").hide();

			$("#content_affiliate_signup").show();
			$("#login-form1").hide();
			$("#login-form2").show();
		},
		
		/*-----------------------------------------
		// events_activity_view
		-------------------------------------------*/
		events_activity_view: function () {
			
			var actionTypeValue = $("#action_type").val();
			if(actionTypeValue == 0 || actionTypeValue == '') {
				console.log('yes i here'); 
				$("#action_type").val("");
				$("#event_detail_append").html("");					
				$("#event_detail_view").hide();
				$("#event_activity").show();
				$("#offer").hide();
				$("#history").hide();
				$("#settings").hide();
				$("#help").hide();
				$("#about").hide();
				$("#friends").hide();
				$("#dashboard").hide();
				
			}
		},
				
			
		/*-----------------------------------------
		// event_detail_back_button
		-------------------------------------------*/
		event_detail_back_button: function () {
						global_event_name = "";
			$("#event_detail_append").html("");					
			$("#event_detail_view").hide();
			$("#event_activity").show();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
			$("#dashboard").hide();		
		},
			
		/*-----------------------------------------
		// seeoffer_show_view
		-------------------------------------------*/
		seeoffer_show_view: function () {
						
			if(global_event_name != "") {
				return false;
			}
			// Show a WIP graphic here
			$("#action_type").val("");
			// build the offer table
			v_msg = "DEBUG: build the offer table";
			ui_log.log("AUDIT", "ui_affiliate", "seeoffer_show_view", v_msg);

			// call ajax to get offers from the databaase for this user
			api.do_ajax(		"index", 						// module
								"get_offers", 						// action
								{ 									// request data - validate at server
									token:			1,
									username: 		'paul',
								}, 
								ui_affiliate.seeoffer_show_view1		// callback function
			);

		},
		
		/*-----------------------------------------
		// seeoffer_show_view1
		-------------------------------------------*/
		seeoffer_show_view1: function (json_data) {
		
			v_msg = "DEBUG: process ajax response with offers for this user - AJAX data = " + JSON.stringify(json_data);
			ui_log.log("AUDIT", "ui_affiliate", "seeoffer_show_view1", v_msg);
		
			$(".js_content_section").hide();
			$("#content_affiliate_events").show();
			$("#event_activity").hide();

			var v_status=json_data.status;
			if (v_status == "OK") {
			

				
				// empty any existing data in offer table
				$(".offer_table thead").remove();
				$(".offer_table tbody").remove();
	
			var str="";
			
			str += '	<thead>';
			str += '		<tr style="height:30px;">';
			str += '			<th class="offer_id" style="display:none;" >ID</th>';
			str += '			<th class="vendor" style=""><input type="checkbox" id="selecctall"></th>';
			str += '			<th class="vendor" style="">Company</th>';
			str += '			<th class="product" style="">Product</th>';
			str += '			<th class="ad_type" style="">Ad Type</th>';
			str += '			<th class="bid_price">Bid Price</th>';
			str += '		</tr>';
			str += '	</thead>';
			
			str += "<tbody style=\"font-size:11px;\">";
			for (i = 0, len = json_data.offer_data.length ; i < len; i++) {
				oneRow = json_data.offer_data[i];
				
				
				if (i % 2) {
					str += "<tr style='height:30px;' class='shaded' onclick='' id='rowid_"+oneRow.id+"'>";
				}
				else {
					str += "<tr style='height:30px;' class='nonshaded' onclick='' id='rowid_"+oneRow.id+"'>";
				}

				c01_title=""; c01_data=oneRow.id;
				c02_title=""; c02_data=oneRow.vendor;
				c03_title=""; c03_data=oneRow.product;
				c04_title=""; c04_data=oneRow.ad_type;
				c05_title=""; c05_data=oneRow.bid_price;
				c06_title=""; c06_data="<input type = 'checkbox' class = 'checkbox' id = 'checkboxid_"+oneRow.id+"' onclick='ui_affiliate.change_background("+oneRow.id+")' />";
				
				str += "<td class=\"c01\" style=\"display:none;\" title=\"" + c01_title + "\">" 					+ c01_data + "</td>";
				str += "<td class=\"c02\" title=\"" + c06_title + "\">" 					+ c06_data + "</td>";
				str += "<td class=\"c02\" title=\"" + c02_title + "\">" 					+ c02_data + "</td>";
				str += "<td class=\"c03\" title=\"" + c03_title + "\">" 					+ c03_data + "</td>";
				str += "<td class=\"c04\" title=\"" + c04_title + "\">" 					+ c04_data + "</td>";
				str += "<td class=\"c05\" title=\"" + c05_title + "\">" 					+ c05_data + "</td>";
				
				
				
				// special logic for delete button
				//str += "<td class=\"event_list_deleteButton\"><div class='table_delete_button nodelete'><img src=\"images/delete_icon.png\" style=\"opacity:0.2;\" /></div></td>";
				
				
				str += "</tr>";
				
			}
			
			// if no rows were found or processed, show No Data Found message in table
			if (i == 0) {
				str += "<tr style='height:30px;' class='nonshaded noupdate'>";
				// colspan = 100% leaves a gap for unknown reason
				str += "<td colspan=\"12\" style=\"text-align:center;\">No Data Found</td>";
				str += "</tr>";
				i = 1;
			}
			
			str += "</tbody>";
				
console.log("table built -str=" + str);
			
				$(".offer_table").append(str);
				$("#offer").show();
				$("#history").hide();
				$("#settings").hide();								
				$("#help").hide();
				$("#about").hide();
				$("#friends").hide();
				$("#dashboard").hide();
			} 
			else if(v_status == "FAIL") {
				$("#offer_error_message").html('<span>Cannot get your offers at this time - please try again later</span>').css('color', 'red');
				//$("#offer_error_message").show().fadeOut(3000);	
				$("#offer").show();
				$("#history").hide();
				$("#settings").hide();
				$("#help").hide();
				$("#about").hide();
				$("#friends").hide();
				$("#dashboard").hide();
			}
		
		

		},
		
		/*-----------------------------------------
		// change_background
		-------------------------------------------*/
		change_background: function (id) {
			if($("#checkboxid_"+id).is(':checked'))
				$("#rowid_"+id).addClass('checked_row');  // checked
			else
				$("#rowid_"+id).removeClass('checked_row'); // unchecked
		},
		/*-----------------------------------------
		// history_show_view
		-------------------------------------------*/
		history_show_view: function () {
						if(global_event_name != "") {
							return false;
						}
			$("#action_type").val("");											
			// Show a WIP graphic here
	
			// build the offer table
			v_msg = "DEBUG: build the history table";
			ui_log.log("AUDIT", "ui_affiliate", "seehistory_show_view", v_msg);

			// call ajax to get offers from the databaase for this user
			api.do_ajax(
				"index", 						// module
				"get_history", 						// action
				{ 									// request data - validate at server
						token:			1,
						username: 		'paul',
				}, 
				ui_affiliate.history_show_view1		// callback function
			);
									   
		},
					
		/*-----------------------------------------
		// history_show_view1
		-------------------------------------------*/
		history_show_view1: function (json_data) {
		
					v_msg = "DEBUG: process ajax response with offers history for this affiliate - AJAX data = " + JSON.stringify(json_data);
					ui_log.log("AUDIT", "ui_affiliate", "seeoffer_show_view1", v_msg);
					
					
					$(".js_content_section").hide();
					$("#content_affiliate_events").show();
					$("#event_activity").hide();

					var v_status=json_data.status;
					if (v_status == "OK") {



							// empty any existing data in offer table
							$(".history_table thead").remove();
							$(".history_table tbody").remove();

					var str="";

					str += '	<thead>';
					str += '		<tr style="height:30px;">';
					str += '			<th class="offer_id" style="display:;" >ID</th>';
					str += '			<th class="vendor" style="">Date</th>';
					str += '			<th class="product" style="">Information</th>';
					str += '			<th class="ad_type" style="">Status</th>';					
					str += '		</tr>';
					str += '	</thead>';

					str += "<tbody style=\"font-size:11px;\">";
					for (i = 0, len = json_data.history_data.length ; i < len; i++) {
							oneRow = json_data.history_data[i];


							if (i % 2) {
									str += "<tr style='height:30px;' class='shaded' onclick=''>";
							}
							else {
									str += "<tr style='height:30px;' class='nonshaded' onclick=''>";
							}

							c01_title=""; c01_data=oneRow.id;
							c02_title=""; c02_data=oneRow.date;
							c03_title=""; c03_data=oneRow.information;
							c04_title=""; c04_data=oneRow.status;
							
							str += "<td class=\"c01\" style=\"display:;\" title=\"" + c01_title + "\">" 					+ c01_data + "</td>";
							str += "<td class=\"c02\" title=\"" + c02_title + "\">" 					+ c02_data + "</td>";
							str += "<td class=\"c03\" title=\"" + c03_title + "\">" 					+ c03_data + "</td>";
							str += "<td class=\"c04\" title=\"" + c04_title + "\">" 					+ c04_data + "</td>";						   

							// special logic for delete button
							//str += "<td class=\"event_list_deleteButton\"><div class='table_delete_button nodelete'><img src=\"images/delete_icon.png\" style=\"opacity:0.2;\" /></div></td>";


							str += "</tr>";

					}

					// if no rows were found or processed, show No Data Found message in table
					if (i == 0) {
							str += "<tr style='height:30px;' class='nonshaded noupdate'>";
							// colspan = 100% leaves a gap for unknown reason
							str += "<td colspan=\"12\" style=\"text-align:center;\">No Data Found</td>";
							str += "</tr>";
							i = 1;
					}

					str += "</tbody>";

console.log("table built -str=" + str);

							$(".history_table").append(str);
							$("#offer").hide();
							$("#history").show();							
							$("#settings").hide();
							$("#help").hide();
							$("#about").hide();
							$("#friends").hide();
							$("#dashboard").hide();
					} 
					else if(v_status == "FAIL") {
							$("#history_error_message").html('<span>Cannot get your offers at this time - please try again later</span>').css('color', 'red');
							//$("#offer_error_message").show().fadeOut(3000);	
							$("#offer").hide();
							$("#history").show();
							$("#settings").hide();
							$("#help").hide();
							$("#about").hide();
							$("#friends").hide();
							$("#dashboard").hide();
					}
					
			  
		},
					
					
		/*-----------------------------------------
		// settings_show_view
		-------------------------------------------*/
		settings_show_view: function () {
						if(global_event_name != "") {
							return false;
						}
			$("#action_type").val("");	
			$(".js_content_section").hide();

			$("#content_affiliate_events").show();
			$("#event_activity").hide();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").show();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
			$("#dashboard").hide();
		},
		
		/*-----------------------------------------
		// dashboard_show_view
		-------------------------------------------*/
		dashboard_show_view: function () {
			$("#action_type").val("");	
			$(".js_content_section").hide();

			$("#content_affiliate_events").show();
			$("#event_activity").hide();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
			$("#dashboard").show();
		},
		

		/*-----------------------------------------
		// friend_show_view
		-------------------------------------------*/
		friend_show_view: function () {
			if(global_event_name != "") {
				return false;
			}
			$("#action_type").val("");	
			$(".js_content_section").hide();

			$("#content_affiliate_events").show();
			$("#event_activity").hide();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").show();
			$("#dashboard").hide();
		},
		
		/*-----------------------------------------
		// help_show_view
		-------------------------------------------*/
		help_show_view: function () {
						if(global_event_name != "") {
							return false;
						}
			$("#action_type").val("");
			$(".js_content_section").hide();

			$("#content_affiliate_events").show();
			$("#event_activity").hide();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").hide();
			$("#help").show();
			$("#about").hide();
			$("#friends").hide();
			$("#dashboard").hide();
		},
		/*-----------------------------------------
		// about_show_view
		-------------------------------------------*/
		about_show_view: function () {
						if(global_event_name != "") {
							return false;
						}
			$("#action_type").val("");
			$(".js_content_section").hide();

			$("#content_affiliate_events").show();
			$("#event_activity").hide();
			$("#offer").hide();
			$("#history").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").show();
			$("#friends").hide();
			$("#dashboard").hide();
		},
		
		
		/*-----------------------------------------
		// signup_show_view1
		-------------------------------------------*/
		signup_show_back: function() {
			$(".js_content_section").hide();

			$("#content_affiliate_signup").show();
			$("#login-form2").hide();
			$("#login-form1").show();
		},

		/*-----------------------------------------
		// welcome_init
		-------------------------------------------*/
		welcome_init: function() {
			// set events
			$(".js_startnow_button").on("click", ui_affiliate.events_show_view);

		},
		
		/*-----------------------------------------
		// welcome_show_view
		-------------------------------------------*/
		welcome_show_view: function() {
			$(".js_content_section").hide();
			$("#content_affiliate_welcome").show();
		},
		
		load_more: function() {
			$("#load_more").show();
			api.do_ajax(
				"index",
				// module
				"get_comments",// action
				{	// request data - validate at server
					token: 1,
					username:'paul',
				}, 
				ui_affiliate.comments_show_view		// callback function
			);
		},
		
		/*-----------------------------------------
		// comments_show_view
		------------------------------------------*/			
		
		comments_show_view: function (json_data) {
				
			
			var html = '';
			var v_status=json_data.status;
			
			if (v_status == "OK") {
				
				for (i = 0, len = json_data.comment_data.length ; i < len; i++) {
				oneRow = json_data.comment_data[i];
				
					html += '<div class="share">';				
					html += '<div class="panel panel-default feed-panel">';
					html += '<div class="panel-heading">';
					html += '<div class="col-md-1" style="margin-right:5px;"><img src="images/'+oneRow.image+'" height="50" width="50"  /></div>';
					html += '<div class="col-md-10">';
					html += '<strong>'+oneRow.name+'</strong> <br />'+oneRow.date+'</div>';
					html += '</div>';
					html += '<div class="clearfix"></div>';
					html += '<div class="panel-body">';
					html += '<p>'+oneRow.comment+'</p>';						
					html += '<div><span><a title="Like this" aria-live="polite" role="button" href="#"><span>Like</span></a></span> - <span><a title="Leave a comment" role="button" href="#" ><span>Comment</span></a></span> - <span><a title="Send this to friends or post it on your timeline." rel="dialog" href="#"><span >Share</span></a></span></div>';
					html += '</div>';
					html += '<div class="panel-footer"><div class="row">&nbsp;</div></div>';
					html += '</div>';
					html += '</div>';
				}
				$("#append_more").append(html);
				$("#load_more").hide();
			}
		},
		/*-----------------------------------------
		// events_init
		-------------------------------------------*/
		events_init: function() {
			
			// set events
			// $(".js_add_another_button").on("click", ui_affiliate.events_add_action_dropdown);
			//$(".js_action_list").on("change", function() { ui_affiliate.events_add_action(1); } );
		},
		
		/*-----------------------------------------
		// events_show_view
		-------------------------------------------*/
		events_show_view: function(e) {						
						e.preventDefault();
						//window.location="event_entry.php";
						$(".js_content_section").hide();
						$("#content_affiliate_events").show();

						// adjust screen width
						$(".form-signin").css("max-width", "80%");
		},
		
		/*-----------------------------------------
		// save_event_show_view
		-------------------------------------------*/
		save_event_show_view: function() {
			$(".js_save_event_button").addClass("btn-primary-progress");
			$('this').attr("disabled", true);
			
			//$('.js_addevent_button').attr("disabled", "disabled");
			
			setTimeout(function(){
								global_event_name = "";
				$(".js_save_event_button").removeClass("btn-primary-progress");
				$("#action_type").val("");
				$("#event_detail_append").html("");					
				$("#event_detail_view").hide();
				$("#event_activity").show();
				$("#offer").hide();
				$("#history").hide();
				$("#settings").hide();
				$("#help").hide();
				$("#about").hide();
				$("#friends").hide();
				$("#dashboard").hide();
			}, 3000);
		},
		
		/*-----------------------------------------
		// events_show_view
		-------------------------------------------*/
		events_add_action: function(id) {

			var html = '';
			var action_type = id;
			//ui_affiliate.global_action_value.push(action_type);
			
			var next_section = +id + +1;
			console.log(ui_affiliate.global_action_section);
			console.log('nex number '+next_section);
			if(ui_affiliate.global_action_section.indexOf(id) == '-1' || ui_affiliate.global_action_section.indexOf(next_section) == '-1') {
				var add_more = '<a class = "js_add_another_button" href="javascript:;" style="float:right;" id="another_action_'+action_type+'" onclick="ui_affiliate.events_add_action_dropdown('+action_type+');">Add more action...</a>';
				ui_affiliate.global_action_section.push(id);
				ui_affiliate.global_action_number++;
			} else {
				var add_more = '';
			}
			
			$('#action_dropdown_id_'+id).empty();
			console.log('action_type'+action_type);
			if(action_type == "") {
				alert("please select a type");
			} else {
				if(action_type == "1") {
					// WOKE-UP action will be here				
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Enter time..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';					
				}
				
				if(action_type == "2") {
					// BREAK-FAST action will be here
					html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Food..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Location..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '</div>';
					
				}
				
				
				if(action_type == "3") {
					// PLANNED action will be here						
					html += '<div class="form-group">';
					html += '<textarea class="form-control" placeholder="Description..." cols="6" rows="12"></textarea>';
					html += '</div>';
					
					
				}
				
				if(action_type == "4") {
					// PLANNED action will be here		
					//html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Book title..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Author..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Rating *Out of 5*..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
				}
				
				
				if(action_type == "5") {
					// GYM action will be here		
					//html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Name..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Length of time..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';		
					
				}
				
				if(action_type == "6") {
					// GYM action will be here		
					//html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<textarea class="form-control" placeholder="Description..." cols="6" rows="12"></textarea>';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Length of time..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';					
					html += '</div>';					
				}
				
				if(action_type == "7") {
					// LUNCH-DINNER action will be here
					//html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Food..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Location..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';					
				}
				if(action_type == "8") {
					// BREAK-FAST action will be here
					//html += '<div id="action_dropdown_id_'+id+'">';
					html += '<div class="form-group">';
					html += '<input class="form-control" placeholder="Product..." name="general[wokeup]" id="LoginForm_email" type="text" required autofocus />';
					html += '</div>';
					html += '<div class="form-group">';
					html += '<textarea class="form-control" placeholder="Description..." cols="6" rows="12"></textarea>';
					html += '</div>';					
				}							
				$("#event_detail_name").html(global_event_name);
				$("#event_detail_append").html("");
				$("#event_detail_append").append(html);
				$("#event_detail_view").show();
				$("#event_activity").hide();
				$("#offer").hide();
				$("#history").hide();
				$("#settings").hide();
				$("#help").hide();
				$("#about").hide();
				$("#friends").hide();
				$("#dashboard").hide();		
			}
			
		},
		
		/*-----------------------------------------
		// events_add_action_dropdown
		-------------------------------------------*/
		events_add_action_dropdown: function(action_number) {
			$('#another_action_'+action_number).remove();
			
			
			var html = '';
			html += '<div class="form-group">';
			html += '<select class="form-control" name="action_type[]" id="action_type_'+ui_affiliate.global_action_number+'" onchange="us_user.events_add_action('+ui_affiliate.global_action_number+')">';
			html += '<option value="0">Select Action...</option>';
			
			$('#action_type_1 option').each(function() { 
					var option_value 	= $(this).attr('value');
					var label 			= $(this).text();
					//if(global_action_value.indexOf(option_value) == '-1' && option_value != '0') {
					if(option_value != '0') {
						html += '<option value="'+option_value+'">'+label+'</option>';			
					}
			});	
			html += '</select>';
			html += '</div>';
			html += '<div id="action_dropdown_id_'+ui_affiliate.global_action_number+'">';
			html += '</div>';
			$("#appendme").append(html);
		},
		
		/*================================================================================
		dummy_func
		==================================================================================*/
		dummy_func: function() {
			// end
		}

	}

</script> 
<script type="text/javascript" src="js/api.js"></script> 
<script type="text/javascript" src="js/log.js"></script>
</body>
</html>
