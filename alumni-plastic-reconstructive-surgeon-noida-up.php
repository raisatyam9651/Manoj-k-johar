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
	$pageHeading = "Alumni";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
$pageTitle = 'Internships of Dr. Manoj k Johar,  Plastic surgeon ';
$pageDescription = 'Internships of Dr. Manoj k Johar, who is a best plastic surgeon in Vaishali, Ghaziabad and Noida. ';
$pagekeywords = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery, best plastic surgery hospital in Delhi NCR, plastic surgery hospital in Noida, cosmetic surgeon in Ghaziabad, Dramatic medical treatments in Noida';


$ogtitle = 'Internships of Dr. Manoj k Johar,  Plastic surgeon';

$ogdescription= 'Internships of Dr. Manoj k Johar, who is a best plastic surgeon in Vaishali, Ghaziabad and Noida. ';


$twtitle = 'Dr. Johar’s Plastic Surgery Group';
$twdescription='Dr. Manoj k johar is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';

$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';



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
                <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/about-us-vision-mission-plastic-reconstructive-surgeon-noida-up/">About Us </a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
                <h1><?php echo $pageHeading; ?></h1>
            </div>
        </div>
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">
                           <h2>Fellowship – Aesthetic Medicine & Surgery</h2>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="https://assets.yourpractice.online/2014/dr-sonal-th.jpg" alt="Dr. Sonal">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Sonal</h3>
									</div>
									<div class="clear-float"></div>
								</li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="https://assets.yourpractice.online/2014/dr-naina-sharma-th.jpg" alt="Dr. Naina Sharma">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Naina Sharma</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>



                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="https://assets.yourpractice.online/2014/dr-nishant-kumar-th.jpg" alt="Dr. Nishant Kumar ">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Nishant Kumar </h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                            <h2>Fellowship – Cranio-Maxillofacial Trauma</h2>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-kamini-dadsena-th.jpg" alt="Dr. Kamini Dadsena">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Kamini Dadsena</h3>
									</div>
									<div class="clear-float"></div>
								</li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-anurag-basak-th.jpg" alt="Dr. Anurag Basak">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Anurag Basak</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>



                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-chandni-mathur-th.jpg" alt="Dr. Chandni Mathur">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Chandni Mathur</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-janmesh-galvankar-th.jpg" alt="Dr. Janmesh M. Galvankar">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Janmesh M. Galvankar</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                            
                            <h2>Fellowship – Hand & Microsurgery</h2>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-anil-kumar-th.jpg" alt="Dr. Anil Kumar">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Anil Kumar</h3>
									</div>
									<div class="clear-float"></div>
								</li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-ankur-bhatia-th.jpg" alt="Dr. Ankur Bhatia">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Ankur Bhatia</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>

                            </ul>
                            
                            <h2>Fellowship – Reconstructive Microsurgery</h2>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-jitesh-sharma-th.jpg" alt="Dr. Jitesh Sharma">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Jitesh Sharma</h3>
									</div>
									<div class="clear-float"></div>
								</li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-rahul-jain-th.jpg" alt="Dr. Rahul Jain">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Rahul Jain</h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>

                            </ul>

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
