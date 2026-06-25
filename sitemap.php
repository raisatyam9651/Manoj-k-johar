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
	$pageHeading = "Sitemap";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <?php
$pageTitle = 'Sitemap | Plastic Surgery Specialists Delhi | Noida';

$pageDescription = 'The sitemap helps you to easily navigate through our website. Plastic surgery specialist, Dr. Manoj K. Johar in Delhi and Ghaziabad, Noida ';
$pagekeywords = 'sitemap, plastic surgery, cosmetic medicine';
$canonicalurl ='https://www.theaesthetic.in/sitemap/';

$ogtitle = 'Sitemap | Plastic Surgery Specialists Delhi | Noida';

$ogdescription= 'The sitemap helps you to easily navigate through our website. Plastic surgery specialist, Dr. Manoj K. Johar in Delhi and Ghaziabad, Noida .';

$ogurl ='https://www.theaesthetic.in/sitemap/';

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
        
  <h2>Sitemap</h2>
                           <div id="siteMap" class="siteMap"></div>
							
							<!--<ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about-us-vision-mission-plastic-reconstructive-surgeon-noida-up/">About Us</a>
        <ul>
          <li><a href="/vision-mission-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" > Vision &amp; Mission</a></li>
          <li><a href="/our-team-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Team, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Our Team</a></li>
          <li><a href="/certification-awards-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Awards, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Certification &amp; Awards</a></li>
          <li><a href="/news-events-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="News and Events, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR" >News &amp; Events</a> 
            <!--<ul class="subMenu">--> 
            <!--    <li class="menu-home"><a href="/in-media/">In Media</a></li>--> 
            <!--</ul>--> 
          <!--</li>-->
          <li><a href="/education-training-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Education and training, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR" >Education &amp; Training</a>
            <ul>
              <li><a href="/education-training-plastic-reconstructive-surgeon-noida-up/">Fellowships</a></li>
              <li><a href="/internships-plastic-reconstructive-surgeon-noida-up/">Internships/Obsorvorship</a></li>
              <li><a href="/alumni-plastic-reconstructive-surgeon-noida-up/">Alumni</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="/services-plastic-reconstructive-surgeon-noida-up/">Transformative Treatments</a>
        <ul>
          <li><a href="/surgical-treatments-plastic-reconstructive-surgeon-noida-up/">Surgical Treatments</a>
            <ul>
              <li><a href="/amputation-prevention-plastic-reconstructive-surgeon-noida-up/">Amputation Prevention & Limb Preservation</a></li>
              <li><a href="/breast-surgery-plastic-reconstructive-surgeon-noida-up/">Breast Surgery</a></li>
              <li><a href="/cosmetic-surgery-plastic-reconstructive-surgeon-noida-up/">Cosmetic Surgery</a>
                <ul>
                  <li><a href="/hair-transplant-surgical-plastic-reconstructive-surgeon-noida-up/">Hair Transplant</a></li>
                  <li><a href="/brow-lift-plastic-reconstructive-surgeon-noida-up/">Brow Lift</a></li>
                  <li><a href="/blepharoplasty-plastic-reconstructive-surgeon-noida-up/">Blepharoplasty (Eyelid surgery)</a></li>
                  <li><a href="/rhinoplasty-plastic-reconstructive-surgeon-noida-up/">Rhinoplasty (Nose Job)</a></li>
                  <li><a href="/facial-implants-plastic-reconstructive-surgeon-noida-up/"> Facelift</a></li>
                  <li><a href="/facial-implants-faceit-plastic-reconstructive-surgeon-noida-up/">Facial Implants</a></li>
                  
                  <!--<li><a href="/breast-reduction-plastic-reconstructive-surgeon-noida-up/">Breast reduction/ Augmentation/ Lift</a></li>-->
                  <li><a href="/gynaecomastia-surgery-plastic-reconstructive-surgeon-noida-up/">Gynaecomastia</a></li>
                  <li><a href="/arm-reduction-plastic-reconstructive-surgeon-noida-up/">Arm Reduction/Lift</a></li>
                  <li><a href="/thigh-reduction-plastic-reconstructive-surgeon-noida-up/">Thigh reduction/ Lift</a></li>
                  <li><a href="/body-contouring-plastic-reconstructive-surgeon-noida-up/">Body Contouring</a></li>
                  <li><a href="/abdominoplasty-tummy-tuck-mommy-makeover-plastic-reconstructive-surgeon-noida-up/">Abdominoplasty/ Tummy Tuck/ Mommy Makeover</a></li>
                  <li><a href="/liposuction-treatment-plastic-reconstructive-surgeon-noida-up/">Liposuction</a></li>
                  <!--<li><a href="/vaginal-rejuvenation-plastic-reconstructive-surgeon-noida-up/">Female Genital rejuvenation (Vaginoplasty</a></li> 
                  <li><a href="/hymenoplasty-plastic-reconstructive-surgeon-noida-up/">Hymenoplasty</a></li>-->
                </ul>
              </li>
              <li><a href="/cancer-reconstruction-surgery-plastic-reconstructive-surgeon-noida-up/">Cancer Reconstruction Surgery</a></li>
              <li><a href="/children-plastic-surgery-plastic-reconstructive-surgeon-noida-up/">Children Plastic Surgery</a></li>
              <li><a href="/cleft-and-craniofacial-surgery-plastic-reconstructive-surgeon-noida-up/">Cleft & Craniofacial Surgery</a></li>
              <li><a href="/chest-surgery-plastic-reconstructive-surgeon-noida-up/">Chest Surgery ( Pectus Correction)</a></li>
              <li><a href="/facial-plastic-and-maxillofacial-surgery-plastic-reconstructive-surgeon-noida-up/">Facial Plastic & Maxillofacial Surgery</a></li>
              <li><a href="/female-genital-cosmetic-surgery-plastic-reconstructive-surgeon-noida-up/">Female Genital Cosmetic Surgery</a></li>
              <li><a href="/lymphedema-plastic-reconstructive-surgeon-noida-up/">Lymphedema</a></li>
            </ul>
          </li>
          <li><a href="/non-surgical-treatments-plastic-reconstructive-surgeon-noida-up/">Nonsurgical Treatments</a>
            <ul>
              <li><a href="/acne-treatment-plastic-reconstructive-surgeon-noida-up/">Acne and Acne Scars</a></li>
              <li><a href="/hair-fall-treatment-plastic-reconstructive-surgeon-noida-up/">Hair Restoration (Hair fall/ Hairloss</a></li>
              <!--<li><a href="/hair-transplant-plastic-reconstructive-surgeon-noida-up/">Hair Transplant</a></li> -->
              <li><a href="/face-care-rejuvenation-plastic-reconstructive-surgeon-noida-up/">Face Care & Rejuvenation</a></li>
              <li><a href="/lasers-plastic-reconstructive-surgeon-noida-up/">Lasers</a></li>
              <li><a href="/skin-tightening-plastic-reconstructive-surgeon-noida-up/">Skin Tightening</a></li>
              <li><a href="/prp-plastic-reconstructive-surgeon-noida-up/">PRP</a></li>
              <li><a href="/botox-plastic-reconstructive-surgeon-noida-up/">Botox</a></li>
              <li><a href="/fillers-plastic-reconstructive-surgeon-noida-up/">Fillers</a></li>
              <li><a href="/bridalplasty-plastic-reconstructive-surgeon-noida-up/">Bridalplasty</a></li>
              <li><a href="/thread-lift-plastic-reconstructive-surgeon-noida-up/">Thread lift</a></li>
              <li><a href="/chemical-peel-plastic-reconstructive-surgeon-noida-up/">Chemical Peel</a></li>
              <li><a href="/microdermabrasion-plastic-reconstructive-surgeon-noida-up/">Microdermabrasion</a></li>
              <li><a href="/permanent-makeup-plastic-reconstructive-surgeon-noida-up/"> Permanent Makeup</a></li>
              <li><a href="/vaginal-rejuvenation-plastic-reconstructive-surgeon-noida-up/">Vaginal Rejuvenation</a></li>
            </ul>
          </li>
          <li><a href="/cosmetic-medicine-plastic-reconstructive-surgeon-noida-up/">Cosmetic Medicine</a></li>
          <li><a href="/preventive-aesthetics-plastic-reconstructive-surgeon-noida-up/">Preventive Aesthetics</a></li>
          <li><a href="/age-reversal-plastic-reconstructive-surgeon-noida-up/">Age Reversal</a></li>
        </ul>
      </li>

          <!--<ul>-->
              <li>Locations
                  <ul>
                  <li><a href="https://www.theaesthetic.in/plastic-surgeon-in-delhi-ncr/">Plastic Surgeon in Delhi NCR</a></li>
                  </ul>
              </li>
          <!--</ul>-->
     
      <li><a href="/patient-info-plastic-reconstructive-surgeon-noida-up/" >Patient Guide</a>
        <ul>
          <li><a href="/patient-education-videos-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Patient Video, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Patient Education Videos</a></li>
          <!--<li><a href="/your-assessment-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Assessment, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Your Assessment</a></li>
					<li><a href="/payment-options-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title=" Payment, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Payment Options</a></li>-->
          <li><a href="/offers-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Offers, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Offers</a></li>
          <li><a href="/gallery-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Gallery, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Gallery</a></li>
          <li><a href="/video-logs-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Video, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Video Logs</a></li>
          <li><a href="/patient-reviews-testimonials-f11218/" hreflang="en" title="Testimonials, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Patient Testimonials</a></li>
          <li><a href="/faqs-plastic-reconstructive-surgeon-noida-up/">FAQ's</a></li>
          <li><a href="/first-visit-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Visit, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR">First Visit</a></li>
          <li><a href="/blogs/" hreflang="en" title="Blog, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Blog</a></li>
          <li><a href="/healthcare-news-pl919.html" hreflang="en" title="Healthcare News, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Healthcare News</a></li>
          <!--<li><a href="/patient-forms-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Forms, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Patient Forms</a></li>-->
          <li><a href="/international-patients-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="International, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >International Patients</a></li>
          <li><a href="/submit-a-query-plastic-reconstructive-surgeon-noida-up/">Submit Reports</a></li>
        </ul>
      </li>
      <li><a href="/submit-a-query-plastic-reconstructive-surgeon-noida-up/">Submit a Query</a></li>
      <li><a href="/general-appointment-plastic-reconstructive-surgeon-noida-up/">Appointments</a>
        <ul>
          <li><a href="/urgent-appointments-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Urgent Appointments, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Urgent Appointments</a></li>
          <li><a href="/virtual-appointments-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Virtual, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Virtual Appointments</a></li>
          <li><a href="/submit-a-query-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="Query, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >Submit a Query</a></li>
          <li><a href="/general-appointment-plastic-reconstructive-surgeon-noida-up/" hreflang="en" title="General, Plastic Surgeon in Vaishali, Plastic Surgeon in Noida, Best Plastic Surgeon in East Delhi, Best Plastic Surgeon in Delhi NCR" >General Appointment</a></li>
          <!--          <li><a href="/online-appointment-plastic-reconstructive-surgeon-noida-up/">Online Appointment</a></li>-->
        </ul>
      </li>
      <li><a href="/career-plastic-reconstructive-surgeon-noida-up/">Career</a></li>
      <li><a href="/contact-us-plastic-reconstructive-surgeon-noida-up/">Contact Us</a></li>
    </ul>
							
           
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