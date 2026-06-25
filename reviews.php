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
	$pageHeading = "Reviews";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Reviews | Cosmetic Surgery Delhi | Cosmetic Surgeon Noida, UP, Uttarakhand, Haryana</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" />
<?php include 'includes/head-tag-main.php';?>
	 <style>        .google-reviews a {            text-decoration: none;            position: relative;            display: inline-block;            margin: 20px 5px        }        .google-reviews a span {            position: absolute;            bottom: -26px;            width: 100%;            text-align: center;            left: 0px;            font-weight: bold;        }    </style>
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
        <p>If you're happy, tell others!</p>						<p>It motivates us to keep our services prompt.</p>						<p>Click on the links below to leave your positive comments and reviews on rating sites that help other  patients find, evaluate, compare and select physicians.</p>																<h3>Thank you</h3><div class="google-reviews">  <!--<a href="" target="_blank" alt="Write a review"><img src="images/write-a-review.jpg"></a>-->   <a href="https://www.facebook.com/Dr-Johars-Plastic-Surgery-Group-101799121947317/reviews" target="_blank" alt="Facebook"><img src="/images/facebook-logo.jpg"></a><a href="http://search.google.com/local/writereview?placeid=ChIJpYepfzv7DDkRYzwhymLtsiw" target="_blank" alt="Google"><img src="/images/Review_Google.png"><span>Patparganj</span></a><a href="http://search.google.com/local/writereview?placeid=ChIJW3kx7_b7DDkRDyt-6miYp0U" target="_blank" alt="Google"><img src="/images/Review_Google.png"><span>Vaishali</span></a><a href="http://search.google.com/local/writereview?placeid=ChIJ-QbmyY_lDDkR-DCt8WmA4tc" target="_blank" alt="Google"><img src="/images/Review_Google.png"><span>Noida</span></a><!--<a href="" target="_blank" alt="HealthGrades"><img src="images/healthgrades-logo.jpg"></a>--><!--<a href="" target="_blank" alt="Vitals"><img src="images/vitals-logo.jpg"></a><!--<a href="" target="_blank" alt="yelp"><img src="images/yelp-logo.jpg"></a><a href="" target="_blank" alt="RateMD's"><img src="images/ratemd-logo.jpg"></a><a href="" target="_blank"alt="Rate Hospita"><img src="images/ratehospitals-logo.jpg"></a>--></div> 
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