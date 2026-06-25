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
	$pageHeading = "Vision &amp; Mission";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<!--
<title><?php echo $metaInfo; ?></title>
<meta name="description" content="<?php echo $metaInfo; ?>">
<meta name="keywords" content="<?php echo $metaInfo; ?>">
<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" /> -->
<?php
$pageTitle = 'Vision &amp; Mission | Dr. Johar’s Plastic Surgery Group';

$pageDescription = 'Looking for the best plastic surgeon near you? Look no further than Dr. Manoj K Johar, Plastic Surgery Group. We are the best plastic surgery hospital in Delhi';
$pagekeywords = 'Dr. Manoj K johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR, Acne Treatment in Ghaziabad, Acne Treatment in Noida, Acne Treatment in Vaishali, Breast Augmentation in Delhi, Breast Reduction in Delhi, Gynecomastia Treatment in Delhi, Gynecomastia Treatment in Noida';
$canonicalurl ='https://www.theaesthetic.in/vision-mission-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Vision &amp; Mission | Dr. Johar’s Plastic Surgery Group';

$ogdescription= 'Looking for the best plastic surgeon near you? Look no further than Dr. Manoj K Johar, Plastic Surgery Group. We are the best plastic surgery hospital in Delhi';

$ogurl ='https://www.theaesthetic.in/vision-mission-plastic-reconstructive-surgeon-noida-up/';

$ogsitename ='Dr. Johar’s Plastic Surgery Group';

$ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$twtitle = 'Dr. Johar’s Plastic Surgery Group';
$twdescription='Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery';

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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/about-us-vision-mission-plastic-reconstructive-surgeon-noida-up/">About Us </a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
           
        	<h3>Vision</h3>
			<p>Our vision is to grow and create a safe and caring environment to improve the quality of our patient‘s health and self–image. To accomplish this we support our staff to provide competent and professional care, to continue their education through staff development. </p>

			<h3>Mission</h3>
			<p>Our mission is to provide uncompromisingly outstanding outpatient surgical care, where patients and employees alike are treated with the dignity, gentleness, respect, and uniqueness that every human being deserves. Our highly vetted board–certified surgeons, and our exceptionally qualified staff accomplish this by creating a patient–centric environment where privacy is respected, quality of care is excellent, safety is paramount, and compassion is second nature. 
			</p>

           
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