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
	$pageHeading = "Patient Education Videos";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
$pageTitle = 'Patient Education Video |Botox Injection | Abdominoplasty';
$pageDescription = 'Click on the desired multimedia patient education videos to learn about various cosmetic conditions, treatments, and surgical management offered by Dr. Johar.';
$pagekeywords = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema, patient education videos, aesthetician therapies, botox injection, lipoabdominoplasty, abdominoplasty';
$canonicalurl ='https://www.theaesthetic.in/patient-education-videos-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Patient Education Video |Botox Injection | Abdominoplasty';
$ogdescription= 'Click on the desired multimedia patient education videos to learn about various cosmetic conditions, treatments, and surgical management offered by Dr. Johar.';
$ogurl ='https://www.theaesthetic.in/patient-education-videos-plastic-reconstructive-surgeon-noida-up/';
$ogsitename ='Dr. Johar’s Plastic Surgery Group';
$ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$twtitle = 'Dr. Johar’s Plastic Surgery Group';
$twdescription='Dr. Manoj k johar is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';
$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$schemaidname = ' https:\/\/www.theaesthetic.in/\/#breadcrumb,';
$listid = 'https:\/\/www.theaesthetic.in/\/';
$listidname = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';
$templatename = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';?>
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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/patient-info-plastic-reconstructive-surgeon-noida-up/" title="patient Info about Dr. Manoj k Johar: Best Plastic Surgeon">Patient Info</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
           
<h2>Patient Education Videos</h2>
                            <p>Explore this section for resources on patient education animations.</p>
                            <p>Welcome to our <b>patient education video library!</b> Our video animations provide information about various medical conditions, including anatomy, symptoms, and treatment procedures, in presentations that are simple and easy for patients to understand. We are happy to discuss your condition and treatment options in greater detail and answer any questions you may have. </br> Please call our office at  <span class="tel1 textMainBold">+91 85277 78462</span> to make an appointment.</p>
                            <p>Click on the desired multimedia patient education videos to learn more on various conditions and surgical management.</p>
                        <div class="multiBorder">
                               <iframe src="https://www.ypo.education/c-MTc0OTg0My4y/" id="ypoedu-container" name="ypoedu-container" width="100%" scrolling="no" border="0px" frameborder="0px" style="height:300px;width:100%" allowfullscreen="allowfullscreen"></iframe>
<script src="https://www.ypo.education/js/ypo-edu-embed.js"></script>
                            </div>
                            <p><span class="textMainBold">Disclaimer:</span> All information presented on this page is intended for informational purposes only and not to render medical advice. The information contained herein is not intended to provide medical advice, diagnose, treat, cure or prevent any disease.</p>         
           
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