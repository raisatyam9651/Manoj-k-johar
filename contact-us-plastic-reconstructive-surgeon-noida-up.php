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
	$pageHeading = "Contact Us";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
$pageTitle = 'Contact - Dr. Manoj K. Johar | Best Plastic Surgery Ghaziabad';
$pageDescription = 'Please contact plastic and reconstructive surgeon, Dr. Manoj K. Johar, in Delhi, Ghaziabad, and Noida regarding cosmetic conditions and for any other queries.';
$pagekeywords = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema';
$canonicalurl ='https://www.theaesthetic.in/contact-us-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Contact - Dr. Manoj K. Johar | Best Plastic Surgery Ghaziabad';
$ogdescription= 'Please contact plastic and reconstructive surgeon, Dr. Manoj K. Johar, in Delhi, Ghaziabad, and Noida regarding cosmetic conditions and for any other queries.';
$ogurl ='https://www.theaesthetic.in/contact-us-plastic-reconstructive-surgeon-noida-up/';
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
		#prac-loc {
			display: none;
		}
		.forms {
			margin: 20px 0px;
		}
	</style>
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
           
   <h2 class="dr-name">Dr. Johar’s Plastic Surgery Group</h2>
							<p>For all appointments and inquiries, please call <span class="tel1 textMainBold"></span>.</p>
							<p class="textMainBold">We are happy to hear from you. Please contact us using the information below:</p>
							<?php include 'includes/contact.php';?>
							<h3 data-icon="&#xe800;"> Submit a Query</h3>
							<p class="PDFtext">Fields marked (<span class="mandatory">*</span>) are required</p>
							<div class="forms">
								<script src="https://forms.yourpractice.online/WFlHRFBVeGgxOTNScDhRUmVtbHRpQT09OjrlaeAiYyWflpLuScsCsIC5dlW/" type="text/javascript"></script>
							</div>
           
          </article>
         </div>
    
      </div>
    </div>
  </div>
<?php include 'includes/usefull-links.php';?>
<?php include 'includes/footer.php';?></div>
<!-- keep this before closing body tag --> 
<?php include 'common/scripts-compress.php'?>
</body>
</html>