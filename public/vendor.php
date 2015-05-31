<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="vendors/bootstrap/bootstrap.min.css" />
<link rel="stylesheet" href="css/datepicker/all.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/core.js"></script>
<script src="js/widget.js"></script>
<script src="js/datepicker.js"></script>
<script type="text/javascript" src="vendors/bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/datepicker/demos.css">
<!-- temp bring the styles into here so we can see what is actually used -->
<!-- link rel="stylesheet" type="text/css" href="css/style.css" /  -->

<style>
body {
	padding-top: 0px;
	padding-bottom: 40px;
	background-color: #404751;
	font-family:open_sanslight;
}
.logo_row {
	border-bottom: 20px;
	border-bottom-color: #5988E1;
	border-bottom-style: solid;
}
.logo {
	font-weight:bold;
	font-size:30px;
	margin:0;
	padding:0;
	width:130px;
}
.user_info {
	margin-left:50px;
	width:120px;
	color: blue;
}

.navbar_custom {
    padding-top: 10px;
}

.navbar_custom  ul{
	width:100%;
}
.navbar_custom  li{
	width:25%;
}
.nav a {
	color:black;
}


.auth-links {
	color:#7A878F !important;
	transition:all 0.3s ease 0s;
	text-align:center;
	font-size:12px;
	margin:0 auto;
	width:50%;
}

.form-signin {
	max-width: 510px;
	padding: 0 15px 15px;
	margin: 30px auto;
	height:600px;
}
.form-signin .form-signin-heading, .form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin .checkbox {
	font-weight: normal;
}
.form-signin .form-control {
	height: 40px;
	font-size: 14px;
	color:#999999;
	font-weight:400;
	font-family:open_sanslight;
	align: middle;
	color:black;
}
.form-signin .btn-primary {
	font-size: 16px;
	width:30%;
	font-weight:400;
	font-family:open_sanslight;
	align: middle;
	background:none repeat scroll 0 0 #5988E1;
	height:32px;
}
s body .ide input:-moz-placeholder, body .ide textarea:-moz-placeholder, body .plugin-auth input:-moz-placeholder, body .plugin-auth textarea:-moz-placeholder {
 color: #999999;
}
.form-signin .form-control:focus {
	z-index: 2;
}
.form-signin input[type="email"] {
	margin-bottom: -1px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
	margin-bottom: 10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
.errorMessage {
	color: red;
	font-size: 0.9em;
}
.auth-form-inner {
	width:70%;
	margin:0 auto;
	text-align:center;
}
.auth-form-inner p {
	margin-top:20px;
}
/* enable absolute positioning */
.inner-addon {
	position: relative;
}
/* style icon */
.inner-addon .glyphicon {
	position: absolute;
	padding: 10px;
	pointer-events: none;
}
/* align icon */
.left-addon .glyphicon {
	left:  0px;
}
.right-addon .glyphicon {
	right: 0px;
}
/* add padding  */
.left-addon input {
	padding-left:  30px;
}
.right-addon input {
	padding-right: 30px;
}
.oauth-buttons {
	margin-top:20px;
	text-align:center;
}
.oauth-buttons:before {
	content:"";
	display:table;
	line-height:0;
}
.github-signin {
	float:left;
	color:#5988E1;
	font-size:14px;
	margin:0 25px;
}
.form-group label {
	display:none;
}
.auth-links-inner {
	width:100%;
}
.signup_footer {
	text-align: left;
	font-size: 11px;
	line-height: 15px;
	color: #424953;
	display: inline-block;
	margin-top:5px;
}
.form-group label {
	display:none;
}
.seclect_event .form-group {
	/*display:inline-block;*/
	width:100%
}

.seclect_event tr {
	cursor:pointer;
}

.seclect_event tr:hover {
	background-color: #FFFFCC !important;
}


.errormsgbox {
	background-color: #FDD5CE;
	background-image: url("images/error.png");
	background-position: 10px center;
	background-repeat: no-repeat;
	background-size: 30px auto;
	border: 2px solid;
	color: #D8000C;
	line-height: 35px;
	padding-left:40px;
	float:left;
	padding-bottom: 0;
	padding-top: 0;
	width: 100%;
	text-align:left;
}
.errormsgbox span {
	margin-left:40px;
}
.sponser_ads {
	float:right;
	text-decoration:underline;
	color:#999999;
}

.mainbox {
	background: none repeat scroll 0 0 #fff;
	border: 1px solid #c5dbec;
	border-radius: 5px;
	margin-bottom: 15px;
}
.mainbox .boxhead {
	background: none repeat scroll 0 0 #5988e1;
	border-bottom: 1px solid #c5dbec;
	border-radius: 5px 5px 0 0;
	clear: both;
	min-height: 34px;
	padding: 5px 10px 0;
	width: 100%;
}
.mainbox .boxhead h5 {
	color: #fff;
	float: left;
	font-size: 14px;
	font-weight: 700;
	margin: 4px 0 0;
}
.mainbox p {
	margin: 5px;
	
}

.col-md-4.ads {
	/*background-color:#FFFFD7;*/
}
.ads h4 {
	margin: 10px 0 0 0; 
	color:#251a69;
}
.ads a {
	font-size:14px;
	color:#557647;
}
.ads p {
	margin:0 0 0 0 !important;
}

.checked_row {
	background-color:#FFFFCC !important;
}


</style>
<title>Login</title>
</head>

<body>
<div class="span-19"> 
  
  <!-- Note 
	- these views will eventually be in separate files loaded in by jQuery 
	  based on the vendors locale and device (so devices and./or locales may 
	  end up using different views for same form
--> 
  
<!-- vendor login view -->
<div id="content_vendor_login" class="js_content_section">
	<form id="login-form" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo"><img src="images/diary_logo1.png" /></p>
				</div>
				<i class="icon-ok"></i>
				<div class="oauth-buttons">
					<a class="github-signin" href="javascript:void(0)"> 
						<i class="icon-large icon-search"></i> Sign In via Facebook 
					</a> 
					<a class="bitbucket-signin" href="javascript:void(0)"> 
						<i class="fa fa-fw fa-bar-chart-o"></i> Sign In via Google 
					</a> 
				</div>
				<div class="form-group">
					<p> — or — </p>
				</div>
				<div class="form-group inner-addon">
					<p><strong>Sign in</strong> using your registered account:</p>
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
		</div>
	</form>
	<div id="auth-links" class="auth-links" >
		<div class="auth-links-inner"> 
			<a href="#!signup" class = "js_signup_button" style="color:#7A878F">Need an account? Sign up here...</a> |
			<a href="password" style="color:#7A878F">Lost your password?</a> 
		</div>
	</div>
</div>
<!-- end div for class = content_vendor_login --> 
  
<!-- end of vendor login view --> 
<!-- --------------------------------------------------------------------------------- --> 
  
<!-- vendor signup view -->
<div id="content_user_signup" class="js_content_section"> 
    
<!-- page 1 of signup - display this form initially -->
	<form id="login-form1" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo"><img src="images/diary_logo1.png" /></p>
				</div>
				<div class="oauth-buttons"> 
					<a class="github-signin" href="javascript:void(0)"> 
						<i class="fa fa-fw fa-bar-chart-o"></i> Sign In via Facebook 
					</a> 
					<a class="bitbucket-signin" href="javascript:void(0)"> 
						<i class="fa fa-fw fa-bar-chart-o"></i> Sign In via Google 
					</a> 
				</div>
				<div class="form-group">
					<p> --------------------- </p>
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
				<p class="signup_footer" > By completing this form you agree to our 
                	<a href="#">Terms of Use</a>, 
					<a href="#">Acceptable Usage Policy</a> and 
					<a href="#">Privacy Policy</a> 
				</p>
			</div>
		</div>
	</form>

	<!-- page 2 of signup, initially this is hidden -->
	<form id="login-form2" action="" method="post" style = "display:none;">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo"><img src="images/diary_logo1.png" /></p>
				</div>
			<div class="oauth-buttons"> 
				<a class="github-signin" href="javascript:void(0)"> 
					<i class="fa fa-fw fa-bar-chart-o"></i> Sign In via Facebook 
				</a> 
				<a class="bitbucket-signin" href="javascript:void(0)"> 
					<i class="fa fa-fw fa-bar-chart-o"></i> Sign In via Google 
				</a> 
			</div>
			<div class="form-group">
				<p>--------------------------------------------- </p>
			</div>
			<div class="form-group">
				<p><strong>Welcome</strong>, please create a short profile</p>
			</div>
	
			<div class="form-group">
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
            <div class="form-group">
                <input class="form-control" placeholder="Zip or Postal Code..." name="LoginForm[pin]" id="LoginForm_pin" type="text" />
            </div>
            <div class="form-group">
                <select class="form-control" name="sex" id="sex">
                    <option value="">Select Sex...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="merital_status" id="merital_status">
                    <option value="">Select marital status...</option>
                    <option value="male">Married</option>
                    <option value="female">Single</option>
                </select>
            </div>
            <div class="form-group">
                <input type="button" value="BACK" class="btn btn-default js_signup_back">
                <input type="submit" value="SAVE" class="btn btn-primary">
            </div>
            <p class="signup_footer" > By completing this form you agree to our 
                <a href="#">Terms of Use</a>, 
                <a href="#">Acceptable Usage Policy</a> and 
                <a href="#">Privacy Policy</a> 
            </p>
		</div>
	</div>
</form>
	<div id="signin-links" class="auth-links" style="color:#7A878F" >
		<div class="auth-links-inner"> <a href="vendor.php">Already have an account? Sign in here...</a> </div>
	</div>
</div>

<!-- end div for class = content_vendor_signup --> 
  
<!-- end of user vendor view --> 
<!-- --------------------------------------------------------------------------------- --> 
  
<!-- vendor welcome view -->
<div id="content_vendor_welcome" class="js_content_section">
	<form id="login-form" action="" method="post">
		<div class="modal-content form-signin">
			<div class="modal-body auth-form-inner">
				<div class="form-group">
					<p class="logo"><img src="images/diary_logo1.png" /></p>
				</div>
				<i class="icon-ok"></i>
				<p> You are now signed into the Diary application, your personal passive income tool. </p>
				<p> Select users for your advertisement. </p>
				<p style="height:20px;">&nbsp; </p>
				<div class="form-group">
					<input type="submit" value="Start Now" class="btn btn-primary js_startnow_button">
				</div>
			</div>
		</div>
	</form>
</div>
<!-- end div for id = content_vendor_welcome --> 
  
<!-- end of vendor welcome view --> 
<!-- --------------------------------------------------------------------------------- --> 


  
<!-- select location view -->



<div id="content_vendor_location" class="js_content_section">
	
		<div class="modal-content form-signin">
        
        
        
        <div class="row logo_row">
		<div class="row_pos" style="position:relative; ">

			<img class="logo" style="margin-left:40px"  src="images/diary_logo1.png" width="20%" />

			<a class="user_info" href="javascript:void(0)"> 
				<span class="user_info_label">Vendor Name:</span> 
				<span class="user_info_data">John Doe </span>
			</a>
			
			<a class="user_info" href="javascript:void(0)">
				<span class="user_info_label">Vendor Level: </span>
				<span class="user_info_data">Silver </span>
			</a>
			
			<a class="user_info" href="javascript:void(0)">
				<span class="user_info_label">Vendor Points: </span>
				<span class="user_info_data">12,550 </span>
			</a>
			

			<span class="dropdown" style="
position: absolute;
top: 20px;
right: 20px;">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<img src="images/icon_menu_chrome.png" /> 
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="javascript:" class="js_settings_button">Settings</a>
						<a href="javascript:" class="js_help_button">
						Help</a>
						<a href="javascript:" class="js_about_button">About</a>
					</li>
				</ul>
			</span>
		</div>
		</div>

		<div class="navbar_custom">
			<ul class="nav nav-tabs ">
				<li>
					<a href="javascript:" class="js_submit_confirm_back">Add Campaign</a>
				</li>
				<li>
					<a href="javascript:" class="js_history_button">History</a>
				</li>
				<li>
					<a href="javascript:" class="js_offer_button">See Offers</a>
				</li>
				<li>
					<a href="javascript:" class="js_friend_button">Friends</a>
				</li>

			</ul>
		</div>
		<div class="clearfix"></div>
        
        
		<div class="modal-body" id="campaign_activity">
			
          <div class="col-md-8">
            	<form id="login-form" action="" method="post">  	
                	<div class="form-group">
                    <p><strong>Select Location</strong></p>
                </div>
                
                	<div class="form-group">
                <select class="form-control" name="action_type[]" id="action_type_1" onchange="add_action(1)">
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
                
                	<div class="form-group inner-addon left-addon">
                <input type="text" placeholder="From Date..." class="form-control"  id="datepicker">
            </div>
                	<div class="form-group inner-addon left-addon">
                <input type="text" placeholder="To Date..." class="form-control" id="datepicker-to">
            </div>
            
                	<div class="form-group">
                <input type="submit" value="SUBMIT" class="btn btn-primary js_select_location">
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
        
        
        
<!-- select event view -->
		<div class="modal-body seclect_event" id="content_select_event" style="display:none;">
			
          <div class="col-md-8">
          
        	
          
            	<form id="login-form" action="" method="post">  	
                	<div class="form-group">
                    <p><strong>Select Event</strong></p>
                </div>
               
               <div style="overflow: auto; height: 330px;">
                <table class="history_table history_table table table-striped">
                	<tr>
                    	<th>EVENT TYPE</th>
                        <th>USER - COUNT</th>
                    </tr>
                    <tr class="form-group js_select_event" id="_event_1" >
                    	<td id="event_name_event_1">EAT_BREAKFAST </td>
                        <td id="event_users_event_1"> 61,2980 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_2" >
                    	<td id="event_name_event_2">READ_BOOK </td>
                        <td id="event_users_event_2"> 57987 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_3" >
                    	<td id="event_name_event_3">WORK </td>
                        <td id="event_users_event_3"> 89, 0987 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_4" >
                    	<td id="event_name_event_4">EAT_DINNER </td>
                        <td id="event_users_event_4"> 94,5987 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_5" >
                    	<td id="event_name_event_5">GYM</td>
                        <td id="event_users_event_5"> 23,4123 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_6" >
                    	<td id="event_name_event_6">VISIT_FRIENDS</td>
                        <td id="event_users_event_6"> 175,200 </td>
                    </tr>
                    
                    <tr class="form-group js_select_event" id="_event_7" >
                    	<td id="event_name_event_7">RESEARCH</td>
                        <td id="event_users_event_7"> 32,3098 </td>
                    </tr>
                </table>
        	</div>
                
                <div class="form-group inner-addon left-addon">
                    <input type="button" value="BACK" class="btn btn-default js_select_event_back">
                </div>
                <div class="form-group inner-addon left-addon"> &nbsp; </div>
                <div class="form-group"> &nbsp; </div> 	
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
<!-- end div for id = content_select_event --> 
<!-- end of select event view --> 
<!-- --------------------------------------------------------------------------------- --> 


<!-- select profile view -->

		<div class="modal-body seclect_event" id="content_select_profile" style="display:none;">
			
          <div class="col-md-8">
            	<form id="login-form" action="" method="post">  	
                	<div class="form-group">
                    <p><strong>Filter Result</strong></p>
                </div>
                
               
               <div class="form-group" > <span id="event_name_filter"> READ_BOOK </span> (<span id="count_user"> 57,987 </span> ) </div>
                <div class="clear"></div>
                <div class="form-group">
                    <select class="form-control" name="action_type[]" id="action_type_1" onchange="update_user_count()">
                        <option value="0">Select Category...</option>
                        <option value="all">All</option>
                        <option value="action">Action</option>
                        <option value="thriller">Thriller</option>
                        <option value="love">Love</option>
                        <option value="horror">Horror</option>
                    </select>
                </div>
                <div class="col-lg-6" style="padding:0;">
                    <div class="form-group inner-addon left-addon">
                        <select class="form-control" name="action_type[]" id="action_type_1" onchange="update_user_count()">
                            <option value="0">Sex of reader...</option>
                            <option value="male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group inner-addon left-addon">
                        <input type="text" placeholder="Age From ..." class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group inner-addon left-addon">
                        <input type="text" placeholder="Age To ..." class="form-control">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group inner-addon left-addon">
                    <input type="text" placeholder="Profession ..." class="form-control" >
                </div>
                <div class="form-group">
                    <input type="button" value="BACK" class="btn btn-default js_submit_profile_back">
                    <input type="submit" value="SELECT THIS DATA-SET" style="width:40%" class="btn btn-primary js_submit_profile">
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

<!-- end div for id = content_select_profile --> 
<!-- end of select profile view --> 
<!-- --------------------------------------------------------------------------------- --> 
          
		
        
<!-- select advert type view -->        
        <div class="modal-body seclect_event" id="content_select_adverttype" style="display:none;">
			
          <div class="col-md-8" style="overflow: auto; height: 400px;">
            	<form id="login-form" action="" method="post">  	
                	<div class="form-group">
                    <p><strong>Select Advert Type</strong></p>
                </div>
                
               
              	<div class="form-group" > The filters are: </div>
                <div class="clear"></div>
                <div class="form-group" >
                    <div class="col-lg-3">Country:</div>
                    <div class="col-lg-9"> USA </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-3">From:</div>
                    <div class="col-lg-9"> Feb 1st, 2015 </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-3">To:</div>
                    <div class="col-lg-9"> Feb 28th, 2015 </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-3">Event:</div>
                    <div class="col-lg-9"> READ_BOOK </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-3">Book:</div>
                    <div class="col-lg-9"> THRILLER </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-3">Sex of reader:</div>
                    <div class="col-lg-9"> FEMALE </div>
                </div>
                <div class="form-group" >&nbsp;</div>
                <div class="form-group" > Please select advert type and enter bid amount: </div>
                <div class="form-group" >
                    <div class="col-lg-4"> Text Ad in diary: </div>
                    <div class="col-lg-2"> (0.05) </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" />
                        <br />
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-4"> Banner Ad in diary: </div>
                    <div class="col-lg-2"> (0.20) </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" />
                        <br />
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-4"> Ad Type 3: </div>
                    <div class="col-lg-2"> (0.25) </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" />
                        <br />
                    </div>	
                </div>
                <div class="form-group" >
                    <div class="col-lg-4"> Ad Type 4: </div>
                    <div class="col-lg-2"> (0.45) </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" />
                        <br />
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-lg-4"> Add Type 5: </div>
                    <div class="col-lg-2"> (0.55) </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" />
                        <br />
                    </div>
                </div>
                <div class="form-group">
                    <input type="button" value="BACK" class="btn btn-default js_submit_advert_back">
                    <input type="submit" value="SUBMIT THIS BID" style="width:40%" class="btn btn-primary js_submit_advert_type">
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
<!-- end div for id = content_select_campaign --> 
<!-- end of select  campaign view --> 
<!-- --------------------------------------------------------------------------------- --> 

<!-- select campaign view -->
    
    <div class="modal-body seclect_event" id="content_select_campaign" style="display:none;">
			
          <div class="col-md-8" style="overflow: auto; height: 400px;">
            	<form id="login-form" action="" method="post">  	
                	<div class="form-group">
                    <p><strong>Enter Campaign</strong></p>
                </div>
                
               	<div class="form-group inner-addon left-addon">
				<input type="text" placeholder="Campaign Name ..." class="form-control">
			</div>
                <div class="form-group inner-addon left-addon">
                    <input type="text" placeholder="Maximum spend..." class="form-control" >
                </div>
                <div class="form-group">
                    <select class="form-control" name="action_type[]" id="action_type_1" onchange="add_action(1)">
                        <option value="0">Select Period...</option>
                        <option value="1">1 Day</option>
                        <option value="3">3 Days</option>
                        <option value="4">4 Days</option>
                        <option value="5">5 Days</option>
                        <option value="7">7 Days</option>
                        <option value="10">10 Days</option>
                        <option value="14">14 Days</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="button" value="BACK" class="btn btn-default js_submit_campaign_back">
                    <input type="submit" value="SUBMIT" class="btn btn-primary js_submit_campaign">
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
<!-- end div for id = content_select_campaign --> 
<!-- end of select  campaign view --> 
<!-- --------------------------------------------------------------------------------- --> 
    
<!-- confirm view -->    

    <div class="modal-body seclect_event" id="content_confirm" style="display:none;">
			
          <div class="col-md-8" style="overflow: auto; height: 400px;">
            	<form id="login-form" action="" method="post">  	
                	                
               	<div class="form-group">
					<p><strong>Bids have been submitted to the user.</strong></p>
				</div>      
                <div class="form-group">
                    <input type="button" value="BACK" class="btn btn-default js_submit_confirm_back">
                    
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

<!-- end div for id = content_confirm --> 
<!-- end of confirm	 view --> 
<!-- --------------------------------------------------------------------------------- --> 

    
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
      
      <!-- /container -->
    
    
    <!-- /container --> 
</div>
<!-- end div for id = content_vendor_location --> 
<!-- end of vendor select location view --> 
<!-- --------------------------------------------------------------------------------- --> 
  

    



</div>
<div class="span-5 last">
	<div id="sidebar"> </div>
	<!-- sidebar --> 
</div>
<script>
var event_id = '';
var event_count_id = '';

// jquery ready function
	$(function() {	
			
		$(".js_content_section").hide();
		$("#content_vendor_login").show();
		ui_vendor.init();
		$( "#datepicker" ).datepicker();
		$( "#datepicker-to" ).datepicker();
		
	});


// object literal for user functions and views
	ui_vendor = {
		// object variables
		global_action_value:  [],
		global_action_section: [],
		global_action_number: 1,
		
		/*-----------------------------------------
		// init
		-------------------------------------------*/
		init: function() {
			v_msg = "DEBUG: running process_login";
			ui_log.log("AUDIT", "ui_vendor", "process_login", v_msg);
			
			// load and show login screen
			ui_vendor.login_init();
			ui_vendor.login_show_view();
			
			// lazy load and initialize
			ui_vendor.signup_init();
			
			
					
		}, 
		
		/*-----------------------------------------
		// login_init
		-------------------------------------------*/
		login_init: function() {
		
			// set events
			$(".js_login_button").on("click", ui_vendor.login_process_request);
			
			$(".js_signup_button").on("click", ui_vendor.signup_show_view);
			
			$(".js_sign_cancel").on("click", ui_vendor.login_show_view);
			
			$(".js_signup_back").on("click", ui_vendor.signup_show_back);
			
			$(".js_startnow_button").on("click", ui_vendor.select_location_show_view);
			
			$(".js_select_event_back").on("click", ui_vendor.select_location_show_view);
			
			$(".js_select_event").on("click", ui_vendor.select_profile_show_view);
			
			$(".js_submit_profile_back").on("click", ui_vendor.select_event_show_view);
			
			$(".js_submit_profile").on("click", ui_vendor.select_advert_type_show_view);
			
			$(".js_submit_advert_back").on("click", ui_vendor.select_profile_show_view);
			
			$(".js_submit_advert_type").on("click", ui_vendor.enter_campaign_show_view);
			
			$(".js_submit_campaign").on("click", ui_vendor.confirm_show_view);
			
			$(".js_submit_campaign_back").on("click", ui_vendor.select_advert_type_show_view);
			
			$(".js_submit_confirm_back").on("click", ui_vendor.select_location_show_view);
			
			$(".js_friend_button").on("click", ui_vendor.friend_show_view);			
						
			$(".js_settings_button").on("click", ui_vendor.settings_show_view);
						
			$(".js_help_button").on("click", ui_vendor.help_show_view);
						
			$(".js_about_button").on("click", ui_vendor.about_show_view);
			
			$(".js_select_location").on("click", ui_vendor.select_event_show_view);
						
		},
		
		/*-----------------------------------------
		// login_show_view
		-------------------------------------------*/
		login_show_view: function() {
			$(".js_content_section").hide();
			$("#content_vendor_login").show();
		},

		/*-----------------------------------------
		// login_process_request
		-------------------------------------------*/
		login_process_request: function(e) {
		
			e.preventDefault();
			
			v_msg = "DEBUG: running login_process_request";
			ui_log.log("AUDIT", "ui_vendor", "login_process_request", v_msg);
			
			// all ajax calls go thru this interface
			api.do_ajax(		"index", 						// module
								"vendor_login", 						// action
								{ 									// request data - validate at server
									token:			1,
									username: 		$("#LoginForm_username").val(),
									password:		$("#LoginForm_password").val(),
									browser:		"",
									window_height:	$(window).height(),
									window_width:	$(window).width()
								}, 
								ui_vendor.login_process_response		// callback function
			);
			

			v_msg = "DEBUG: after ajax call";
			ui_log.log("AUDIT", "ui_vendor", "setEvents", v_msg);

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
				$("#content_vendor_location").show();
				
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
				ui_vendor.signup_show_view1();
			});
			
			$("#login-form2").on("submit", function( e ) {
				e.preventDefault();
				ui_vendor.welcome_show_view();
			});
			
		},
		
		/*-----------------------------------------
		// signup_show_view
		-------------------------------------------*/
		signup_show_view: function() {
			$(".js_content_section").hide();
			$("#content_user_signup").show();
		},
		
		/*-----------------------------------------
		// signup_show_view1
		-------------------------------------------*/
		signup_show_view1: function() {
			$(".js_content_section").hide();
			$("#content_user_signup").show();
			$("#login-form1").hide();
			$("#login-form2").show();
		},
		
		/*-----------------------------------------
		// signup_show_view1
		-------------------------------------------*/
		signup_show_back: function() {
			$(".js_content_section").hide();

			$("#content_user_signup").show();
			$("#login-form2").hide();
			$("#login-form1").show();
		},

		
		/*-----------------------------------------
		// welcome_show_view
		-------------------------------------------*/
		welcome_show_view: function() {
			$(".js_content_section").hide();
			$("#content_vendor_welcome").show();
		},
		
		/*-----------------------------------------
		// select_location_show_view
		-------------------------------------------*/
		select_location_show_view: function(e) {
			console.log('heer in jall');
			e.preventDefault();			
			$("#js_content_section").show();
			$("#campaign_activity").show();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},
		
		
		/*-----------------------------------------
		// select_event_show_view
		-------------------------------------------*/
		select_event_show_view: function(e) {
			e.preventDefault();
			event_id = '';
			event_count_id = '';
			console.log('heer in select evnt show view');
			//$(".js_content_section").hide();
			$("#campaign_activity").hide();
			$("#content_select_event").show();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},
		
		
		/*-----------------------------------------
		// select_event_init
		-------------------------------------------*/
		select_event_init: function() {		
			// select events
			
			/*$( ".js_select_event" ).on( "click", function() {
				console.log('in event selection function');
				//var event_id = '';
				//var event_count_id = '';
				ui_vendor.select_profile_show_view
			});*/
			$(".js_select_event").on("click", ui_vendor.select_profile_show_view);
			
		},
		
		/*-----------------------------------------
		// select_profile_show_view
		-------------------------------------------*/
		select_profile_show_view: function(e) {
			
			e.preventDefault();
			
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").show();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
			if(event_id == '') {
				event_id = this.id;
			}		
			var event_text = $("#event_name"+event_id).text();
			if(event_count_id == '') {
				event_count_id = this.id;
			}
			var event_users = $("#event_users"+event_count_id).text();
			
			$("#event_name_filter").html(event_text);
			
			$("#count_user").html(event_users);
		},
		
		
		/*-----------------------------------------
		// select_profile_show_view
		-------------------------------------------*/
		select_advert_type_show_view: function(e) {
			
			e.preventDefault();
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").show();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},				
		
		/*-----------------------------------------
		// enter_campaign_show_view
		-------------------------------------------*/
		enter_campaign_show_view: function(e) {
			
			e.preventDefault();
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").show();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},
		
		/*-----------------------------------------
		// select_profile_show_view
		-------------------------------------------*/
		confirm_show_view: function(e) {
			
			e.preventDefault();
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").show();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},
		
		
		/*-----------------------------------------
		// settings_show_view
		-------------------------------------------*/
		settings_show_view: function () {
			
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").show();
			$("#help").hide();
			$("#about").hide();
			$("#friends").hide();
		},
		
		
		/*-----------------------------------------
		// friend_show_view
		-------------------------------------------*/
		friend_show_view: function () {
			
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").hide();
			$("#friends").show();
		},
		
		/*-----------------------------------------
		// help_show_view
		-------------------------------------------*/
		help_show_view: function () {
			
			$("#campaign_activity").hide();
			$("#content_select_event").hide();			
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").show();
			$("#about").hide();
			$("#friends").hide();
		},
		/*-----------------------------------------
		// about_show_view
		-------------------------------------------*/
		about_show_view: function () {
			
			$("#campaign_activity").hide();
			$("#content_select_event").hide();	
			$("#content_select_profile").hide();		
			$("#content_select_adverttype").hide();
			$("#content_select_campaign").hide();
			$("#content_confirm").hide();
			$("#settings").hide();
			$("#help").hide();
			$("#about").show();
			$("#friends").hide();
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
