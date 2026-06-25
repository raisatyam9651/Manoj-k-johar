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
	$pageHeading = "Dr. Kamlesh Kumar ";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"><?php
$pageTitle = 'Dr Kamlesh Kumar | Plastic and Reconstructive Surgeon Delhi';
$pageDescription = 'Dr Kamlesh Kumar is a plastic and reconstructive surgeon in Delhi and Ghaziabad, Noida in Uttar Pradesh. He expertise in burns & reconstruction, microvascular surgery, congenital anomalies, aesthetic surgery, lymphedema, pectus correction and cancer reconstruction.';
$pagekeywords = 'Dr. Manoj K. Johar, Dr. Kamlesh Kumar , plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema';
$canonicalurl ='https://www.theaesthetic.in/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Dr Kamlesh Kumar | Plastic and Reconstructive Surgeon Delhi';
$ogdescription= 'Dr Kamlesh Kumar is a plastic and reconstructive surgeon in Delhi and Ghaziabad, Noida in Uttar Pradesh. He expertise in burns & reconstruction, microvascular surgery, congenital anomalies, aesthetic surgery, lymphedema, pectus correction and cancer reconstruction.';
$ogurl ='https://www.theaesthetic.in/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up.php/';
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
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '351897443227700');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=351897443227700&ev=PageView&noscript=1" /></noscript>
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

                        <article class="textMain ypocms dr-profile-pg">

                            <div class="img-r">
                                <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-kamlesh-kumar-pr-image-upd.jpg" alt="Dr. Kamlesh Kumar ">
                            </div>
                            <h2>Dr. Kamlesh Kumar </h2>
                            <h3>Senior Consultant - Department of Plastic Surgery</h3>
                            <h2>Education</h2>
                          <ul>
                            <li>MBBS 2006 (AIIMS, New Delhi)</li>
                              <li>MS General Surgery 2014 (AIIMS, New Delhi)</li>
                              <li>MCh Plastic Surgery 2019 (VMMC, New Delhi)</li>
                            
                            
                            </ul>
                            
                            <h2>EXPERIENCE</h2>
                            
                            <ul>
                            
                                <li>Consultant & HOD – Dept of Plastic Surgery (Krishna Hospital, Haldwani , UK)</li>
                                <li>Senior resident MCh (Plastic Surgery) 2016-2019 ( VMMC & SJH, New Delhi)</li>
                                <li>Senior Resident from AIIMS, New Delhi 2014-15</li>
                                <li>Junior Resident from AIIMS, New Delhi 2008-14</li></ul>
                            
                                 <h2>ACCOMPLISHMENTS</h2>
                                
                                <ul>
                                
                                <li>Life Member – NABI ( National Academy of Burn, India)</li>
                                <li>Life Member – APSI (Association of Plastic Surgery of India)</li>
                                <li>Life Member – ASI (Association of Surgeon of India) </li>
                                
                                </ul>
                            
                                
                                
                           <h2>AREAS OF EXPERTISE</h2>
                            
                            <ul>
                            
                                <li>Burns &amp; Reconstruction</li>
                                <li>Microvascular Surgery</li>
                                <li>Congenital anomalies</li>
                                <li>Aesthetic Surgery</li>
                                <li>Lymphedema</li>
                                <li>Pectus correction</li>
                                <li>Cancer reconstruction</li>
                            
                            </ul>
                            
                          <!--  <h2>For Appointment</h2>
                            
                            <p><strong>Call:</strong> <a href="/general-appointment-plastic-reconstructive-surgeon-noida-up/"> +91-8860 444 888</a></p>
                            <p><strong>Visit:</strong> <a href="http://www.maxhealthcare.in/" target="_blank"> www.maxhealthcare.in</a></p>
                            <p><strong>Download:</strong> Max MyHealth App</p>
                            
                            <p class="qr-img"> <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-kamlesh-kumar-qr-appt.jpg" alt="Dr. Kamlesh Kumar QR Code"></p>-->


                        </article>
                    </div>
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
