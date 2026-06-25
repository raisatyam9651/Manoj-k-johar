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
	$pageHeading = "Dr. Pradeep K Singh";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"><?php
$pageTitle = 'Dr. Pradeep K Singh |Plastic & Reconstructive Surgeon in Noida';
$pageDescription = 'Dr. Pradeep K Singh is a plastic & reconstructive surgeon . He specializes in surgical treatments, non-surgical treatments, cosmetic medicine, preventive aesthetics.';
$pagekeywords = 'Dr. Manoj K. Johar, Dr. Pradeep K Singh, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, amputation prevention, breast surgery, cancer reconstruction surgery, children plastic surgery, cleft and craniofacial surgery, facial plastic surgery, maxillofacial surgery, lymphedema';
$canonicalurl ='https://www.theaesthetic.in/dr-pradeep-k-singh-plastic-reconstructive-surgeon-noida-up/';
$ogtitle = 'Dr. Pradeep K Singh |Plastic & Reconstructive Surgeon in Noida';
$ogdescription= 'Dr. Pradeep K Singh is a plastic & reconstructive surgeon . He specializes in surgical treatments, non-surgical treatments, cosmetic medicine, preventive aesthetics.';
$ogurl ='https://www.theaesthetic.in/dr-pradeep-k-singh-plastic-reconstructive-surgeon-noida-up/';
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
                                <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-pradeep-k-singh-prfl-pic.jpg" alt="Dr. Pradeep K Singh">
                            </div>
                            <h2>Dr. Pradeep K Singh</h2>
                            <h3>Principal Consultant</h3>
                            <h2>Education</h2>
                            <ul>
                                <li>MBBS from King George's Medical College, Lucknow (2004)</li>
                                <li>MS (General Surgery) from King George's Medical College, Lucknow (2007)</li>
                                <li>MCh - Plastic Surgery from SMS Medical College, Jaipur (2013)</li>
                            </ul>

                            <h2>Work Experience</h2>
                            <ul>
                                <li>Senior Consultant &amp; Head, Medeor Hospital, Manesar (2019)</li>
                                <li>Senior Consultant &amp; Head, Department of Plastic Surgery at Nayati Medicity, Mathura (2018-2019)</li>
                                <li>Consultant, Department of Plastic Surgery at Rockland Hospital, Delhi (2013-2018)</li>
                                <li>Senior Resident (MCh Trainee) in the department of Burns, Plastic and Reconstructive Surgery at SMS Medical College, Jaipur (2010-2013)</li>
                                <li>Senior Resident, Department of Burns, Plastic and Reconstructive Surgery at Safdarjung Hospital, Delhi _(2008-2010)</li>
                                <li>Senior Resident, Department of Burns, General Surgery at Narinder Mohan Hospital, Ghaziabad (2007-2008)</li>
                                <li>Residency in Department of General Surgery, King George's Medical College, Lucknow (2004-2007)</li>
                            </ul>

                            <h2>Area Of Interest</h2>
                            <ul>
                                <li>Micro Vascular Repair &amp; Reconstruction</li>
                                <li>Brachial Plexus &amp; Nerve Injuries&nbsp;</li>
                                <li>Gynecomastia</li>
                                <li>Liposuction</li>
                                <li>Lasers</li>
                                <li>Breast correction surgeries</li>
                                <li>Lymphedema management</li>
                                <li>Post Cancer defect reconstructions</li>
                                <li>Hand Surgeries</li>
                                <li>Maxillofacial Surgeries</li>
                            </ul>
                            <div class="clear-float"></div>
                            <div class="btn"><a href="https://www.myhealthcare.co/book-consult/doctors/pradeep-k-singh/125/15/72/0?consultType=doctors" target="_blank" rel="nofollow">Book Appointment</a></div>

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
