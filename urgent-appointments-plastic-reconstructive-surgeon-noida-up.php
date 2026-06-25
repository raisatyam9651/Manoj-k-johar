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
	$pageHeading = "Urgent Appointments";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <?php
$pageTitle = 'Urgent Appointments with Dr. Manoj k Johar: best plastic surgeon in Noida, Vaishali & Delhi';

$pageDescription = 'Urgent Appointments with Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR. Dr. Johar specializes in plastic surgery, cosmetic medicine & reconstruction surgery.';
$pagekeywords = 'Urgent Appointments with Dr. Manoj k Johar,  best plastic surgeon in Noida, Vaishali & Delhi, ';
$canonicalurl ='https://www.theaesthetic.in/urgent-appointments-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Urgent Appointments with Dr. Manoj k Johar: best plastic surgeon in Noida, Vaishali & Delhi';

$ogdescription= 'Urgent Appointments with Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR. Dr. Johar specializes in plastic surgery, cosmetic medicine & reconstruction surgery.';

$ogurl ='https://www.theaesthetic.in/urgent-appointments-plastic-reconstructive-surgeon-noida-up/';

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

</head>
<body>
<?php if($accessibility){include 'includes/accessibility.php';}?>
<div id="Container"> 
   <?php include 'includes/menu.php';?>
  <?php include 'includes/header.php';?> 
 
  <div id="Banner-Container-S" role="presentation"> 
    <div id="Banner">
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/general-appointment-plastic-reconstructive-surgeon-noida-up/">Appointments</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
           <h2 class="dr-name">Dr. Johar’s Plastic Surgery Group</h2>
							<p>For all appointments and inquiries, please call <span class="tel1 textMainBold"></span> or <a href="/online-appointment-plastic-reconstructive-surgeon-noida-up/">click here</a> to request an appointment online.</p>
							<p class="textMainBold">We are happy to hear from you. Please contact us using the information below:</p>
							
							<?php include 'includes/contact.php';?>

							<p><strong>Please arrive 10-15 minutes early for your appointment for registration and to fill in a health questionnaire.</strong></p>
							<p>When you come for your appointment please bring the following:</p>
							<ul>
								<li>Insurance information</li>
								<li>Referral Letter (if required)</li>
								<li>Copies of Blood test results, X-rays, MRIs, CT scans etc and any other relevant information</li>
								<li>List of medications (if any)</li>
							</ul>
							<p><strong>If you need to cancel an appointment</strong></p>
							<p>Telephone the office during business hours and allow at least 1 days&rsquo; notice so that we can offer your appointment time to patients on our waiting list.</p>
							<p>We recognise that your time is valuable, and we make every effort to run on time. Occasionally, emergencies or patients require a little more time, and these cause scheduling delays beyond our control. We apologise if we keep you waiting.</p>      
       
           
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