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
	$pageHeading = "Virtual Appointments";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
$pageTitle = 'Virtual Appointments  with Dr. Manoj k Johar: best plastic surgeon in Noida & Delhi';

$pageDescription = 'Book an Virtual Appointments with Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR.';
$pagekeywords = 'Virtual Appointments  with Dr. Manoj k Johar';
$canonicalurl ='https://www.theaesthetic.in/virtual-appointments-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Virtual Appointments  with Dr. Manoj k Johar: best plastic surgeon in Noida & Delhi';

$ogdescription= 'Book an Virtual Appointments with Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR.';

$ogurl ='https://www.theaesthetic.in/virtual-appointments-plastic-reconstructive-surgeon-noida-up/';

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
<noscript>
<img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=351897443227700&ev=PageView&noscript=1"
/>
</noscript>
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
            <div class="subList">
              <ul>
                <li><a href="https://www.myhealthcare.co/book-consult/doctors/manoj-k-johar/1030/15/72/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment with Dr Manoj Johar</a></li>
                <li><a href="https://www.myhealthcare.co/book-consult/doctors/neerja-johar/2118/15/34/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment with Dr Neerja Johar</a></li>
                <li><a href="https://www.myhealthcare.co/book-consult/doctors/pradeep-k-singh/125/15/72/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment with Dr Pradeep Singh</a></li>
                <!--<li><a href="https://www.myhealthcare.co/book-appointment/clinics/15/specialities/115/doctors/636/time-slots" target="_blank" rel="nofollow">Book Appointment with Dr Abid Saleem</a></li> -->
                <li><a href="https://www.myhealthcare.co/book-consult/doctors/vandana-garg/814/15/16/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment with Dr Vandana Garg</a></li>
                <li><a href="https://www.myhealthcare.co/book-consult/doctors/sanjeev-dua/1186/15/91/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment with Dr Sanjeev Dua</a></li>
              </ul>
            </div>
          </article>
        </div>
        <?php include 'includes/sidebar.php';?>
      </div>
    </div>
  </div>
  <?php include 'includes/usefull-links.php';?>
  <?php include 'includes/footer.php';?>
</div>
<!-- keep this before closing body tag -->
<?php include 'common/scripts-compress.php'?>
</body>
</html>