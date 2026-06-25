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
	$pageHeading = "Best Laser Treatment In Ghaziabad Dr. Manoj K Johar";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="The Aesthetic">
    <meta name="publisher" content="The Aesthetic">

    <meta name="keywords" content="Best Laser Treatment in Ghaziabad, Laser Treatment, best laser treatment Ghaziabad, laser treatment">


    
    <?php
$pageTitle = 'Best Laser Treatment In Ghaziabad Dr. Manoj K Johar';

$pageDescription = 'Discover the best laser treatments in Ghaziabad with Dr. Manoj K. Johar. Specializing in skin rejuvenation, scar reduction, and laser hair removal, Dr. Johar provides advanced, personalized care for optimal results.';


$ogtitle = 'Best Laser Treatment In Ghaziabad';

$ogdescription= 'Dr. Manoj K Jhor offers Best Laser Treatment In Ghaziabad and. He is a recognised expert in this field and has performed many Lasers surgeries successfully.';

$ogsitename ='Dr. Johar’s Plastic Surgery Group';

$ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$twtitle = 'Dr. Johar’s Plastic Surgery Group';
$twdescription='Dr. Manoj k johar is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';

$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$schemaidname = ' https:\/\/www.theaesthetic.in/\/#breadcrumb,';

$listid = 'https:\/\/www.theaesthetic.in/\/';

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
                <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/services-plastic-reconstructive-surgeon-noida-up/">Services</a> <?php echo $breadCrumbSeparator; ?> <a href="/cosmetic-surgery-plastic-reconstructive-surgeon-noida-up/">Cosmetic Surgery</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
                <h1><?php echo $pageHeading; ?></h1>
            </div>
        </div>
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">
                           
                           <p>If you're considering the Best Laser Treatment in Ghaziabad for a cosmetic procedure, you'll find a variety of laser treatments available. Each type of laser procedure offers unique benefits, with different effects tailored to specific skin concerns. The characteristics of the laser determine the conditions it can effectively address, ensuring personalised and effective results.</p>
                           <p>There are two basic categories of lasers:</p>
                           <ul>
                               <li>Ablative lasers work by removing the top layers of damaged skin, promoting skin regeneration. This treatment typically requires some downtime to allow the skin to heal and reveal smoother, healthier skin.</li>
                               <li>Non-ablative lasers target deeper layers of the skin without affecting or removing the top layers. This allows for effective treatment with no downtime, as the surface of the skin remains intact. It’s an ideal option for those seeking cosmetic improvements with minimal disruption to their daily routine.</li>
                           </ul>
                            <p>Lasers are generally used for </p>
                            <ul>
                                <li>Acne & Acne scars</li>
                                <li>Hair removal/reduction</li>
                                <li>Scar Modulation/Improvement</li>
                                <li>Skin resurfacing</li>
                                <li>Skin rejuvenation</li>
                                <li>Tone & Texture improvement</li>
                                <li>Tattoo removal</li>
                                <li>Pigmented and Vascular lesions</li>
                                <li>Photofacial</li>
                                <li>Vaginal rejuvenation</li>
                                <li>Other skin conditions</li>
                            </ul>
                            <p>Laser therapy offers the advantage of minimal pain, swelling, and scarring compared to traditional surgery. Depending on the condition being treated, you may need a single session or multiple sessions to achieve the desired results. This makes laser therapy a convenient and effective option for many cosmetic and medical treatments.</p>
                            <h3>Our Locations for the Best Laser Treatment</h3>
<ul>
  <li>
    <strong><a href="https://www.theaesthetic.in/lasers/" target="_blank">Best Laser Treatment Noida</a></strong>
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
