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
	$pageHeading = "Internships/Observership";
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
                            <p>Dr. Johar’s Plastic Surgery Group is a diverse, vibrant, and focused team that provides complex and technically demanding surgical care. The overall goal of the internship is to provide a broad exposure to the clinical and surgical management of Plastic Surgery patients.</p>
                            <p>Plastic surgery overflows to other specialties and requires a strong knowledge across fields such as Endocrinology, Neurosurgery and Oncology. The scope of plastic surgery encompasses operations from head to toe on a broad spectrum of patients in both the emergency and elective settings - from pediatric to geriatric, and from cosmetic medicine and surgery to complex microvascular reconstructions.</p>
                            <p>The Intern/observer should expect a complete experience of clinical practice including comprehensive management of patients, pre-operative diagnosis and assessment, treatment planning of procedures as well as post-operative followup patient care.</p>
<p class="btn"><a href="/education-training-resume-upload-plastic-reconstructive-surgeon-noida-up/">Submit Resume</a> </p>
                       <!--<p class="btn"><a href="#Resume">Submit Resume</a> </p>-->
                       <p class="hr"></p>


                            <!--<p class="PDFtext">Fields marked (<span class="mandatory">*</span>) are required</p>
                            <p id="Resume"><script src="https://forms.yourpractice.online/MkpmK2ppUmRjSTN4dS9LakxDeTNqZz09OjpND84kfSlAsHCDOSEcRU8QpYH5o/" type="text/javascript"></script></p>-->
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
