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
	$pageHeading = "About Us";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About Cosmetic Surgeon in Delhi | Cosmetic surgery in Delhi Noida</title>
<meta name="description" content="Click here to know more about cosmetic surgeon Dr. Manoj K. Johar in Delhi and Ghaziabad, Noida in Uttar Pradesh. He also offers cosmetic surgery to patients from Uttarakhand and Haryana, IN.">
<meta name="keywords" content="about cosmetic surgeon in delhi, cosmetic surgery in delhi">

<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" />

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
           
        	<h2>About Us</h2>
							<div class="subList">
								<ul>
									<li><a href="/vision-mission-plastic-reconstructive-surgeon-noida-up/">Vision &amp; Mission</a></li>
									<li><a href="/our-team-plastic-reconstructive-surgeon-noida-up/">Our Team</a></li>
									<li><a href="/certification-awards-plastic-reconstructive-surgeon-noida-up/">Certification &amp; Awards</a></li>
									<li><a href="/education-training-plastic-reconstructive-surgeon-noida-up/">Education &amp; Training</a></li>
									<li><a href="/news-events-plastic-reconstructive-surgeon-noida-up/">News &amp; Events</a></li>
									<!--
          <li><a href="/dr-manoj-k-johar-plastic-reconstructive-surgeon-noida-up/">Dr. Manoj Johar</a></li>
          <li><a href="/contact-us-plastic-reconstructive-surgeon-noida-up/">Practice Location</a></li>
-->
                                </ul></div>
           
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