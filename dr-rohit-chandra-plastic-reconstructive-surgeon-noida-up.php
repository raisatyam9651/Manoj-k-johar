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
	$pageHeading = "Dr. Rohit Chandra";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"><?php
$pageTitle = 'Dr Rohit Chandra | Principal Consultant - Department of Plastic Surgery Delhi, Uttarakhand';
$pageDescription = 'Dr Rohit Chandra is principal consultant, a specialised oral and maxillofacial surgeon in Delhi and Ghaziabad, Noida in Uttar Pradesh. His surgical and clinical expertise covers the entire spectrum from simple facial surgeries, orthognathic surgery, jaw contouring and reconstruction surgery to complex craniofacial surgery.';
$pagekeywords = 'Dr. Rohit Chandra, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema';
$canonicalurl ='https://www.theaesthetic.in/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Dr Rohit Chandra | Principal Consultant - Department of Plastic Surgery Delhi, Uttarakhand';
$ogdescription= 'Dr Rohit Chandra is principal consultant, a specialised oral and maxillofacial surgeon in Delhi and Ghaziabad, Noida in Uttar Pradesh. His surgical and clinical expertise covers the entire spectrum from simple facial surgeries, orthognathic surgery, jaw contouring and reconstruction surgery to complex craniofacial surgery.';
$ogurl ='https://www.theaesthetic.in/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up.php/';
$ogsitename ='Dr. Johar’s Plastic Surgery Group';
$ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$twtitle = 'Dr. Chandra’s Plastic Surgery Group';
$twdescription='Dr. Rohit Chandra is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';
$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';
$schemaidname = ' https:\/\/www.theaesthetic.in/\/#breadcrumb,';
$listid = 'https:\/\/www.theaesthetic.in/\/';
$listidname = 'Dr. Rohit Chandra, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';
$templatename = 'Dr. Rohit Chandra, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';
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
                                <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-rohit-chandra-img-profile.jpg" alt="Dr. Rohit Chandra">
                            </div>
                            <h2>Dr. Rohit Chandra</h2>
                            <h3>Principal Consultant - Department of Plastic Surgery</h3>
                            
                            <p>Dr. Rohit Chandra is Principal Consultant, a specialised Oral & Maxillofacial Surgeon (Facio-Maxillary) with 15 years of rich experience in Face & Jaw Surgeries. His surgical & clinical expertise covers the entire spectrum from simple Facial Surgeries, Orthognathic Surgery, Jaw Contouring and reconstruction surgery to complex Craniofacial Surgery.</p>
                            


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
