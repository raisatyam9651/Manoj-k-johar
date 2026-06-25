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
	$pageHeading = "Neck Lift";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
$pageTitle = 'Neck Lift in Noida | Cervicoplasty in Delhi NCR | Neck Lift with Platysmaplasty Haryana';

$pageDescription = 'Dr. Manoj K Jhor in Delhi NCR, Noida, UP, Uttarakhand and Haryana offers neck lift also called cervicoplasty or neck lift with platysmaplasty that is used to enhance the appearance of your neck.';
$pagekeywords = 'neck lift, cervicoplasty, neck lift with platysmaplasty';


$ogtitle = 'Neck Lift in Noida|| Hymen Repair Surgery in Delhi NCR';

$ogdescription= 'Dr. Manoj K Jhor offers Hymen Repair Surgery in Delhi NCR and Noida. He is a recognised expert in this field and has performed many Neck Lift surgeries successfully.';

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
                <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/services-plastic-reconstructive-surgeon-noida-up/">Services</a> <?php echo $breadCrumbSeparator; ?> <a href="/cosmetic-surgery-plastic-reconstructive-surgeon-noida-up/">Cosmetic Surgery</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
                <h1><?php echo $pageHeading; ?></h1>
            </div>
        </div>
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">
                            <h2>What is Neck Lift?</h2>
                            <p>The neck lift is a surgical procedure performed to improve the appearance of the neck and under the jawline by reducing the loose sagging skin. A neck lift also called cervicoplasty or neck lift with platysmaplasty procedure is used to enhance the appearance of your neck. The procedure usually takes two to three hours, but the time may differ if other surgeries such as liposuction, facelift, brow lift are performed along with neck lift.</p>
                            

                            <h2>Procedure for Neck lift surgery</h2>
                            <p>The procedure is performed under general or local anaesthesia and a small incision is made under your chin in front and behind the ear to access the platysma (neck muscles) and tighten them as required. Some excess skin is also removed through the incisions near the ears. After the muscles are tightened, the skin is draped over the ear. The extra skin is then trimmed and the incisions are closed using sutures. A drain is placed on the neck to drain extra fluids to decrease the swelling and discomfort.</p>
                            
                            <h2>Postsurgical Recovery </h2>
                            <p>Following the surgery, you will have a compression bandage to help decrease the swelling. Most patients can resume normal activities after 10 to 14 days. Avoid participating in sports for at least 3 weeks.</p>
                            
                            <h2>Risks and Complications</h2>
                            <p>Complications associated with a neck lift include infection, swelling, bruising, tightness or tingling, burning or pulling sensation and numbness of the skin.</p>
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
