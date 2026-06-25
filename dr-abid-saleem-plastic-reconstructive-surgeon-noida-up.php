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
	$pageHeading = "Dr. Abid Saleem";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
$pageTitle = 'Dr. Abid Saleem |Plastic & Reconstructive Surgeon in Noida';
$pageDescription = 'Dr. Abid Saleem is a plastic & reconstructive surgeon . He specializes in surgical treatments, non-surgical treatments, cosmetic medicine, preventive aesthetics.';
$pagekeywords = 'Dr. manoj johar, Dr. Abid Saleem, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema';
$canonicalurl ='https://www.theaesthetic.in/dr-abid-saleem-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Dr. Abid Saleem |Plastic & Reconstructive Surgeon in Noida';
$ogdescription= 'Dr. Abid Saleem is a plastic & reconstructive surgeon . He specializes in surgical treatments, non-surgical treatments, cosmetic medicine, preventive aesthetics.';
$ogurl ='https://www.theaesthetic.in/dr-abid-saleem-plastic-reconstructive-surgeon-noida-up/';
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
    </div></div>

  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms dr-profile-pg">
           
       <div class="img-r">
       <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-abid-saleem-prfl-pic.jpg" alt="Dr. Abid Saleem"></div>
							<h2>Dr. Abid Saleem<span>Consultant</span></h2>
							<h2>Education</h2>

<ul>
<li>MBBS, University of Jammu, J&amp;K</li>
<li>MS (General Surgery) SKIMS, Srinagar, J&amp;K</li>
<li>MCh (Plastic Surgery) PGI, Chandigarh</li>
<li>Fellowship in Microsurgery, Tata Medical Centre, Kolkata</li>
</ul>

<h2>Work Experience</h2>
<ul>
<li>Senior Resident &ndash; Plastic Surgery, SKIMS, Srinagar</li>
<li>MCh Scholar, PGI Chandigarh</li>
<li>Post MCh scholar, SKIMS, Srinagar</li>
</ul>

<h2>Area of Interest</h2>
<ul>
<li>Microsurgery</li>
<li>Cancer Reconstruction Surgery</li>
<li>Hand surgeries</li>
<li>Replantation surgery</li>
<li>Gynaecomastia</li>
<li>Diabetic Foot</li>
</ul>

<div class="clear-float"></div>
<div class="btn"><a href="https://www.myhealthcare.co/book-appointment/clinics/15/specialities/115/doctors/636/time-slots" target="_blank" rel="nofollow">Book Appointment</a></div>

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