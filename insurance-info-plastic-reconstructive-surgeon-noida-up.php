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
	$pageHeading = "Insurance Info";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Insurance Info | Noida, UP | Uttarakhand, Haryana</title>
  <?php
$pageTitle = 'Insurance Infor for plastic surgery procedures | Dr. Manoj';

$pageDescription = 'Mediclaim policies usually cover plastic surgery procedures except cosmetic ones. For more insurance information , call now: +91 88604 44888';
$pagekeywords = 'Dr. Manoj K johar, Insurance Infor for plastic surgery procedure';
$canonicalurl ='https://www.theaesthetic.in/insurance-info-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Insurance Infor for plastic surgery procedures | Dr. Manoj';

$ogdescription= 'Mediclaim policies usually cover plastic surgery procedures except cosmetic ones. For more insurance information , call now: +91 88604 44888';

$ogurl ='https://www.theaesthetic.in/insurance-info-plastic-reconstructive-surgeon-noida-up/';

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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/patient-info-plastic-reconstructive-surgeon-noida-up/">Patient Info</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
<p>Mediclaim policies usually cover Plastic Surgery procedures except cosmetic ones. For claiming a medical insurance, 24 hour of stay in medical facility is mandatory in most of the insurances but daycare procedures are also applicable in some insurances now.</p>
<p>The documents required for cashless insurance facility are</p>
<ul>
<li>Medical Insurance policy paper / Patient&rsquo;s TPA card</li>
<li>Identity &amp; Age Proof ( Aadhar Card/ Driving License/ Voter&rsquo;s ID)</li>
<li>Passport size photograph of patient and Primary Insurer</li>
<li>Pan Card</li>
<li>Medical Treatment documents ( Old or recent doctor&rsquo;s prescription, laboratory or radiological investigation reports, old discharge summary etc)</li>
<li>FIR/MLC copy (incase of RTA)</li>
</ul>
       <p class="btn"><a href="/submit-a-query-plastic-reconstructive-surgeon-noida-up/">Submit Documents</a> </p>
           
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