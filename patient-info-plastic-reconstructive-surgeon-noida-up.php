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
	$pageHeading = "Patient Guide";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
$pageTitle = 'Patient Guide | Plastic Reconstructive Surgery Delhi NCR';

$pageDescription = 'Click here for patient information. Dr. Manoj K Jhor. Johar in Delhi NCR and Ghaziabad offers plastic reconstructive surgery.';
$pagekeywords = 'patient info, plastic reconstructive surgery';
$canonicalurl ='https://www.theaesthetic.in/patient-info-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Patient Info | Plastic Reconstructive Surgery Delhi NCR';

$ogdescription= 'Dr. Manoj k Johar is the best plastic surgeon in Noida, Ghaziabad & Delhi NCR.  He is a highly skilled and experienced plastic surgeon.';

$ogurl ='https://www.theaesthetic.in/patient-info-plastic-reconstructive-surgeon-noida-up/';

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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
           
         <h2>Patient Guide</h2>
                            <div class="subList">
                   <ul>
					<li><a href="/patient-education-videos-plastic-reconstructive-surgeon-noida-up/">Patient Education Videos</a></li>
					<!--<li><a href="/your-assessment-plastic-reconstructive-surgeon-noida-up/">Your Assessment</a></li>
					<li><a href="/payment-options-plastic-reconstructive-surgeon-noida-up/">Payment Options</a></li>-->
					<li><a href="/offers-plastic-reconstructive-surgeon-noida-up/">Offers</a></li>
					<li><a href="/gallery-plastic-reconstructive-surgeon-noida-up/">Gallery</a></li>
					<li><a href="/video-logs-plastic-reconstructive-surgeon-noida-up/">Video Logs</a></li>
					<li><a href="/patient-reviews-testimonials-f11218/">Patient Testimonials</a></li>
					<li><a href="/faqs-plastic-reconstructive-surgeon-noida-up/">FAQ's</a></li>
					<li><a href="/first-visit-plastic-reconstructive-surgeon-noida-up/">First Visit</a></li>
					<!--<li><a href="/blog.html">Blog</a></li>-->
					<li><a href="https://blog.theaesthetic.in/?ref=bloghunch.com" target="_blank">Blog</a></li>
					<li><a href="/healthcare-news-pl919.html">Healthcare News</a></li>
					<li><a href="/international-patients-plastic-reconstructive-surgeon-noida-up/">International Patients</a></li>
					<!--<li><a href="/patient-forms-plastic-reconstructive-surgeon-noida-up/">Patient Forms</a></li>-->
					<li><a href="/submit-a-query-plastic-reconstructive-surgeon-noida-up/">Submit Reports</a></li>
					<li style="border:none;"></li>
				</ul>
               </div>
           
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