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
	$pageHeading = "Blog | Dr. Manoj Johar";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <?php
$pageTitle = 'Blogs-  Dr. Manoj K. Johar | Cosmetic Surgeon in Delhi NCR, Noida';

$pageDescription = 'Read more blogs on plastic surgery, cosmetic medicine, and reconstruction surgery by Dr. Manoj K. Johar in Delhi, Ghaziabad, and Noida. ';
$pagekeywords = 'Blogs by Dr. Manoj K johar, plastic surgeon, Best Plastic Surgeon in Noida';
$canonicalurl ='https://www.theaesthetic.in/blogs/';

$ogtitle = 'Blogs-  Dr. Manoj K. Johar | Cosmetic Surgeon in Delhi NCR, Noida';

$ogdescription= 'Read more blogs on plastic surgery, cosmetic medicine, and reconstruction surgery by Dr. Manoj K. Johar in Delhi, Ghaziabad, and Noida.';

$ogurl ='https://www.theaesthetic.in/blogs/';

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
<script src="https://app.quickblog.co/js/embed.js?qb_id=2453d3woWAH2seks80qQUO5RUYhl7jjC2QFpkTpergQG"></script>

<?php include 'includes/head-tag-main.php';?>
<style>
 .qb-content {
     font-family:'Roboto' sans-serif;
 }
     .qb-banner{
         display:none;
     }
     .qb-full .qb-post-image{
         text-align:left;
         width:auto;
     }
     .qb-three-column #qb-three {
        min-height: 520px;
        height:520px
     }
     .qb-content h1{
         margin-top:10px;
     }
     body{
         font-size:16px !important;
         color:#000 !important;
     }
 </style>	
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
    <section class="blog-grid">
      <div class="container">
        <div class="row">
            <div id="qb-posts" style="z-index: 1;"></div> 
        </div>
        
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
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