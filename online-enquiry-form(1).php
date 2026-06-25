<?php
	// Common file include
    include 'common/common.php';
	
	$pageHasCMSForm = 'false'; // Make true if the page has html version of CMS form
	
	// Please include page related js files here
    $pageRelatedJsFiles = array(
		JS_PATH."responsiveslides.js",
        JS_PATH."jquery.flexisel.js",
		JS_PATH."functions.js",
    );
	
	// Please include Page related css files here, to add multiple style sheets keep each style sheet name in double quotes separated by comma.
    $pageRelatedCssFiles = array("inner.css");
	
	// Keep h1 tag text here
	$pageHeading = "Online Enquiry Form";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <?php
$pageTitle = 'Dr. Manoj K. Johar Online Enquiry Form | Plastic & Reconstructive Surgeon Delhi Delhi';

$pageDescription = 'We are trying to make our website as helpful and informative as possible, so we need your feedback.';
$pagekeywords = 'dr. manoj k. johar online enquiry form, plastic & reconstructive surgeon';
$canonicalurl ='https://www.theaesthetic.in/online-enquiry-form/';

$ogtitle = 'Dr. Manoj K. Johar Online Enquiry Form | Plastic & Reconstructive Surgeon Delhi NCR';

$ogdescription= 'We are trying to make our website as helpful and informative as possible, so we need your feedback.';

$ogurl ='https://www.theaesthetic.in/online-enquiry-form/';

$ogsitename ='Dr. Johar’s Plastic Surgery Group';

$ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$twtitle = 'Dr. Johar’s Plastic Surgery Group';
$twdescription='Dr. Manoj k johar is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';

$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$schemaidname = ' https:\/\/www.theaesthetic.in/\/#breadcrumb,';

$listid = 'https:\/\/www.theaesthetic.in/\/';

$listidname = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';

$templatename = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';
?>
<?php include 'includes/head-tag-main.php';?>
	
    <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '351897443227700');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=351897443227700&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<style>
	#google_captcha{width: 100% !important;}
.error{color:#f00;}
form{border:1px solid #b1b7cc;padding:10px;}
.double-col {float: left; width: 46%; margin: 5px 2%;}
.triple-col {float: left; width: 29%; margin: 5px 2%;}
input, textarea, select {
	width: 100%;
	border: 1px solid #b1b7cc;
	border-radius: 10px;
	padding: 5px 10px!important;
}
.form-btn {
	cursor: pointer;
	background: #000;
	color: #fff;
	border: none;
	padding: 10px 0px !important;
	font-weight: bold;
	border-radius: 10px;
	font-size: 15px;
}
.form-btn:hover {
	background: #b1b7cc;
	color: #000;
}
.reset-btn {
	cursor: pointer;
	background: #ffffff;
	color: #000;
	border: 1px solid #000;
	padding: 10px 0px !important;
	font-weight: bold;
	border-radius: 10px;
	font-size: 15px;
}

.pd{padding-top:20px;}

@media screen and (max-width:639px){
	.double-col,.triple-col {
	float: none;
	width: 98%;
	margin: 5px 1%;
}}

</style>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
var checkCaptcha = function(response) {
    if(response == '')
		{
      document.getElementById('captcha_solved').value = "0";
      document.getElementById('captcha_error').innerHTML="Please complete the captcha";			
		}
		else
		{
      document.getElementById('captcha_solved').value = "1";
      document.getElementById('captcha_error').innerHTML="";
		}
};  
$(document).ready(function() {
   $("#lead").validate({
      rules: {
         Fname: 'required',
         Lname: 'required',
		 Mobile: {
            required: true,
            minlength: 10,
         },
         Email: {
            required: true,
            email: true,//add an email rule that will ensure the value entered is valid email id.
            maxlength: 255,
         },
		 DOB: 'required',
		 Sex: 'required',
		 Nationality: 'required',
		 Address: 'required',
		  Comments: 'required',
		  Services: 'required',
		  Doctor: 'required',
		  Source:'required',
		 messages: {
			Fname: 'This field is required',
			Lname: 'This field is required',
			Mobile: 'This field is required',
			Email: 'Enter a valid email',
			DOB: 'This field is required',
			Sex: 'This field is required',
			Nationality: 'This field is required',
			Address: 'This field is required',
			Comments: 'This field is required',
			 Services: 'This field is required',
			 Doctor: 'This field is required',
			 Source:'This field is required',
		},
    },submitHandler: function(form) {
			  if($('#captcha_solved').val() == 0) {
          $('#captcha_error').text("Please complete the captcha");
          $('#captcha_error').css("display", "block");
          return false;
        }else{
          $('#captcha_error').text("");
          $('#captcha_error').css("display", "none");
          $("#submit").val("Please wait...");
          $("#submit").attr('disabled', true);
				  form.submit();
        }
			}
   });
});
</script>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('google_captcha', {
          'sitekey' : '6Ley4dYqAAAAAB6EPPXD-YvSegmOeGdOn-Gg0ddV',
          'callback' : 'checkCaptcha'
        });
      };
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#DOB" ).datepicker({
		 dateFormat: 'dd/mm/yy',
		  changeYear: true,
		 yearRange: '1900:' + new Date().getFullYear(),
		 showButtonPanel: true,
		   closeText: "Close",
       onSelect: function (date, datepicker) { 
                    $(this).focus();
                }       
	});
  } );
  </script>
</head>
<body>
<?php if($accessibility){include 'includes/accessibility.php';}?>
<div id="Container"> 
   <?php include 'includes/menu.php';?>
  <?php include 'includes/header.php';?> 
 
  <div id="Banner-Container-S" role="presentation"> 
    <div id="Banner">
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
          
<h2>Online Enquiry Form</h2>

<form id="lead" method="post" action="/clients-pro/" style="width: 100%;">
<input type="hidden" name="capcha_solved" id="captcha_solved" value="0">

<div class="triple-col"><label for="Title">Title:</label><br/>
<select name="Title" id="Title">
<option value="">Please Select</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Mr.">Mr.</option>
    <option value="Ms.">Ms.</option>
    <option value="Miss.">Miss.</option>
    <option value="Dr.">Dr.</option>
    <option value="Dr.(Mrs.)">Dr.(Mrs.)</option>
    <option value="Prof.">Prof.</option>
    <option value="Master">Master</option>
    <option value="Baby">Baby</option>
    <option value="Shk">Shk</option>
    <option value="Shka">Shka</option>   
  </select>
</div> 
<div class="triple-col"><label for="Fname">First Name<span class="mandatory">*</span>:</label><br/>
    <input type="text" id="Fname" name="Fname" title="Please enter first name"></div>
  
<div class="triple-col"><label for="Lname">Last Name<span class="mandatory">*</span>:</label><br/>
    <input type="text" id="Lname" name="Lname" title="Please enter last name"></div>

	 <div class="clear-float"></div> 
 <div class="double-col"><label for="Mobile">Mobile<span class="mandatory">*</span>:</label><br/>
  <input type="text" maxlength="20" id="Mobile" name="Mobile" title="Please enter mobile number"></div>	 
  
<div class="double-col"><label for="Email">Email<span class="mandatory">*</span>:</label><br/>
    <input type="email" id="Email" name="Email" title="Please enter valid email"></div>	
<div class="clear-float"></div> 
<div class="double-col"><label for="Source">Where did you hear about us:<span class="mandatory">*</span></label><br/>
<select name="Source" id="Source" title="Please select where did you hear about us">
<option value="">Please Select</option>
    <option value="Email">Email</option>
    <option value="Facebook">Facebook</option>
    <option value="Google">Google</option>
    <option value="Instagram">Instagram</option>  
    <option value="Snapchat">Snapchat</option>  
     <option value="Pinterest">Pinterest</option>  
      <option value="TikTok">TikTok</option>  
       <option value="Website">Website</option> 
       <option value="WhatsApp">WhatsApp</option> 
       <option value="Youtube">Youtube</option>     
  </select> </div>

<div class="double-col"><label for="Referredby">Referred by:</label><br/>
<input type="text" id="Refby" name="Refby"></div>
	<div class="clear-float"></div> 
<div class="double-col"><label for="Doctor">Doctor:<span class="mandatory">*</span></label><br/>
<select name="Doctor" id="Doctor" title="Please select doctor">
<option value="">Please Select</option>
    <option value="Dr Manoj K Johar">Dr Manoj K Johar</option>
	<!--<option value="Dr Pradeep K Singh">Dr Pradeep K Singh</option>-->
	<!--<option value="Dr Rohit Chandra">Dr Kamlesh Kumar</option>-->
	<option value="Dr Kamlesh Kumar">Dr Kamlesh Kumar</option>
	<option value="Dr Rohit Chandra">Dr Rohit Chandra</option>
	<!--<option value="Dr Ankur Bhatia">Dr Ankur Bhatia</option>-->
	<!--<option value="Dr Ankur Bhatia">Dr Lalit Agrawal</option>-->
	<option value="Dr Lalit Agrawal">Dr Lalit Agrawal</option>
	<!--<option value="Dr Rahul Jain">Dr Rahul Jain</option>-->
	<option value="Dr Rahul Jain">Dr Asha Khushalani</option>
    </select></div>


  <div class="double-col"><label for="Dob">Date of Birth<span class="mandatory">*</span>:</label><br/>
  <input type="text" id="DOB" name="DOB" title="Please enter date of birth" readonly></div>
<div class="clear-float"></div> 
<div class="double-col"><label for="Gender">Gender<span class="mandatory">*</span>:</label><br/>
  <select id="Sex" name="Sex" title="Please select gender">
   <option value="">Please Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select></div>

<div class="double-col"><label for="Nationality">Nationality<span class="mandatory">*</span>:</label><br/>
  <select id="Nationality" name="Nationality" title="Please select nationality">
   <option value="">Please Select</option>
   <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="United States of America">United States of America</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Lesotho">Lesotho</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Brazil">Brazil</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Netherlands">Netherlands</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="Kiribati">Kiribati</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Côte dIvoire">Côte dIvoire</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Republic of Korea">Republic of Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Republic of Macedonia">Republic of Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Republic of Moldova">Republic of Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Morocco">Morocco</option>
<option value="Botswana">Botswana</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Nigeria">Nigeria</option>
<option value="Niger">Niger</option>
<option value="Niue">Niue</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="El Salvador">El Salvador</option>
<option value="San Marino">San Marino</option>
<option value="Samoa">Samoa</option>
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
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
 
  </select>
  </div>
  
<div class="clear-float"></div> 
<div class="double-col"><label for="Address">Address<span class="mandatory">*</span>:</label><br/>
<textarea id="Address" name="Address" title="Please enter address"></textarea></div>
<div class="double-col"><label for="Services">Services:<span class="mandatory">*</span></label><br/>
<select name="Services" id="Services" title="Please select services">
<option value="">Please Select</option>
<option value="Abdominoplasty/ Tummy Tuck">Abdominoplasty/ Tummy Tuck</option>
<option value="ACNE AND ACNE SCAR">Acne and Acne Scar</option>
<option value="AMPUTATION PREVENTION & LIMB PRESERVATION">Amputation Prevention & Limb Preservation</option>
<option value="Arm or thigh Reduction/Lift">Arm or Thigh Reduction/Lift</option>
<option value="BOTOX & Fillers">Botox & Fillers</option>
<option value="BREAST SURGERY">Breast Surgery</option>
<option value="BRIDAL Makeover">Bridal Makeover</option>
<option value="CANCER RECONSTRUCTION SURGERY">Cancer Reconstruction Surgery</option>
<option value="CHILDREN PLASTIC SURGERY">Children Plastic Surgery</option>
<option value="CLEFT & CRANIOFACIAL SURGERY">Cleft & Craniofacial Surgery</option>
<option value="COSMETIC SURGERY">Cosmetic Surgery</option>
<option value="Eyelid surgery">Eyelid Surgery</option>
<option value="Facelift">Facelift</option>
<option value="Gynecomastia">Gynecomastia</option>
<option value="Hair Fall/ Transplant">Hair Fall/ Transplant</option>
<option value="Hymenoplasty">Hymenoplasty</option>
<option value="Labiaplasty">Labiaplasty</option>
<option value="LASER Hair Reduction">LASER Hair Reduction</option>
<option value="Liposuction">Liposuction</option>
<option value="LYMPHEDEMA">Lymphedema</option>
<option value="Pectus Surgery">Pectus Surgery</option>
<option value="PRP">PRP</option>
<option value="Rhinoplasty">Rhinoplasty</option>
<option value="SKIN TIGHTENING">Skin Tightening</option>
<option value="Vaginoplasty">Vaginoplasty</option>
<option value="Others">Others</option>
</select></div>
<div class="clear-float"></div> 
<div class="double-col"><label for="Comments">Comments:<span class="mandatory">*</span></label><br/>
<textarea id="Comments" name="Comments" title="Please enter comments"></textarea></div>
<div class="clear-float"></div>
<div class="double-col" id="google_captcha"></div>
<label class="error" id="captcha_error" for="google_captcha"></label>
<div class="clear-float pd"></div> 	
<div class="double-col"><input name="submit" id="submit" type="submit" value="Submit" class="form-btn"></div><div class="double-col"><input type="reset" value="Reset" class="reset-btn"></div>
<div class="clear-float"></div> 	 
</form>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>





            
           
          </article>
         </div>
            <?php include 'includes/sidebar.php';?>
      </div>
    </div>
  </div>
<?php include 'includes/usefull-links.php';?>
<?php include 'includes/footer.php';?></div>
<!-- keep this before closing body tag --> 
<?php include 'common/scripts-compress.php'?>
</body>
</html>