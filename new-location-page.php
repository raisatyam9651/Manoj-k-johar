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
	$pageHeading = "Acne Treatment in Delhi: Dr. Manoj K Johar";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->

<head>

    <?php
$pageTitle = 'Acne Treatment in Delhi | Dr. Manoj K Johar';

$pageDescription = 'Are you looking for effective acne treatment in Delhi? Discover advanced, personalized solutions to clear your skin and boost confidence.';

// $pagekeywords = 'Dr. K Manoj johar, Acne Treatment, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery';
// $canonicalurl ='https://www.theaesthetic.in/acne-treatment-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Acne Treatment in Delhi | Dr. Manoj K Johar';

$ogdescription= 'Are you looking for effective acne treatment in Delhi? Discover advanced, personalized solutions to clear your skin and boost confidence.';

// $ogurl ='https://www.theaesthetic.in/acne-treatment-plastic-reconstructive-surgeon-noida-up/';

// $ogsitename ='Dr. Johar’s Plastic Surgery Group';

// $ogimageurl =' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

// $ogimagesecureurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

// $twtitle = 'Dr. Johar’s Plastic Surgery Group';
// $twdescription='Dr. Manoj k johar is the best plastic surgeon in Noida, Ghaziabad and Delhi NCR. He is a highly skilled and experienced plastic surgeon.';

$twimageurl = ' https://www.theaesthetic.in/images/drmanojjhor-image-og.jpg';

$schemaidname = ' https:\/\/www.theaesthetic.in/\/#breadcrumb,';

// // $listid = 'https:\/\/www.theaesthetic.in/\/';

// $listidname = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';

// $templatename = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR';
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
    
    <style>
        .container-cstm {
            padding: 0;
            max-width: 80.125rem;
        }
            .banner-text-div{
                bottom: 130px;
                max-width: 35%;
                left: 70px;
                position: absolute !important;
                z-index:1;
                width:100%;
            }
            .banner-text{
                font-size:30px;
            }
            .banner-form{
                box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                background:white;
                border-radius:14px;
                padding:20px;
                margin-top: -50px;
                position: absolute;
                z-index:999;
                min-width:1100px;
            }
        .hide-mob{
                display:block;   
            }
        .hide-desk{
            display:none;   
        }
        
        .input-field{
                height: 3.875rem;
                font-size: 14px;
                color: #9b9b9b;
                font-family: Nunito;
                font-weight: 600;
                padding: 10px 1.875rem;
                width: 100%;
                outline: none;
                border: none;
                box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
                border-radius: 5px;
        }
        
        .top-form-btn{
            font-size: .9375rem;
            color: #000;
            font-weight: 800;
            font-family: Nunito;
            text-transform: uppercase;
            padding: 1.09375rem 1.8125rem;
            line-height: initial;
            text-align: center;
            z-index: 1;
            background: #000;
            color: white;
            border-radius: 5px;
            width: 100%;
        }
        @media screen and (max-width: 790px){
            .hide-desk{
                display:block;
            }
            .hide-mob{
                display:none;
            }
        }
    </style>

</head>

<body>
    <?php if($accessibility){include 'includes/accessibility.php';}?>
    <div id="Container">
        <?php include 'includes/menu.php';?>
        <?php include 'includes/header.php';?>
        
         <!--Banner Area Starts-->
        <section>
            <div style="margin: 0px; min-width: 100%; position: relative;margin-top:20px;">
                    <img class="hide-mob" src="https://spineandbrainindia.com/assets/img/location/banner-desk.webp" alt="best fertility centre in delhi" class="hide-mob">
                    <img class="hide-desk" src="https://spineandbrainindia.com/assets/img/location/banner-mob.webp" alt="best fertility centre in delhi" class="hide-desk">
                    <div class="banner-text-div z1 position-absolute w-100">
                        <h1 class="banner-text">Protect Your Vision: Learn About Glaucoma, Its Causes, Symptoms, and Advanced Treatment Options. Early detection and treatment are key to preserving your eyesight. Stay informed and proactive today!</h1>
                    </div>
                </div>
        </section>
        <!--Banner Area Ends-->
        
        <!--Form Starts-->
        
        <section class="banner-form-section">
            <div class="container-cstm" style="display:flex;justify-content:center;margin:auto;">
                 <form class="banner-form" method="post" action="contact-us-send.php">
                    <div class="row clearfix align-items-center" style="display:flex;justify-content:space-around;align-items:center;margin:auto;">
                        
                        <div class="col-3 ">
                            <h2 style="font-size:24px;margin:0">Request a Callback</h2>
                        </div>
                        
                        <div class="col-3 ">
                            <div class="field-box"><input class="input-field" type="text" name="name" placeholder="Name *"  required></div>
                        </div>
                        
                        <div class="col-3 ">
                            <div class="field-box"><input class="input-field" type="tel" name="phone" placeholder="Phone No *" required></div>
                        </div>
                        <div class="col-3 ">
                            <div class="btn-box"><button class="top-form-btn thm-btn bg-black brd-rd5 position-relative overflow-hidden w-100" name="submit" type="submit">Get a Call</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <!--Form Ends-->
        
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">
                            
                            <h5><b>Understanding Acne</b></h5>
                            <p>Acne is a common skin condition that affects individuals of all ages, characterized by the appearance of pimples, blackheads, and whiteheads. It occurs when hair follicles become clogged with oil and dead skin cells, leading to inflammation. Factors such as hormonal changes, diet, stress, and genetics can contribute to the development of acne.</p>
                            
                            <h5><b>What is Acne Treatment?</b></h5>
                            <p>Acne treatment in Delhi involves a variety of strategies tailored to the individual's skin type and severity of acne. Treatments aim to reduce oil production, speed up skin cell turnover, and fight bacterial infection to prevent new pimples from forming. Common treatments include topical retinoids, antibiotics, and benzoyl peroxide, which help clear clogged pores and reduce inflammation. For more severe cases, oral medications like isotretinoin may be used.</p>
                            
                            <h5><b>Treatment Approach for Acne Treatment</b></h5>
                            <p>When tackling acne, the treatment approach is comprehensive, aimed at both managing current breakouts and preventing future occurrences. Here’s a straightforward guide on the steps involved in acne treatment in Delhi:</p>
                            <ul>
                                <li><b>Consultation:</b> The first step involves visiting the best doctor who can diagnose the type and severity of acne. This is crucial for tailoring the treatment to your specific needs.</li>
                                <li><b>Customized Treatment Plan:</b> Based on your acne type, skin type, and medical history, the dermatologist will create a personalized treatment plan. This might include topical treatments, oral medications, or both.</li>
                                <li><b>Topical Medications:</b> These are applied directly to the skin and may include ingredients like benzoyl peroxide, retinoids, and antibiotics to help reduce oil production and fight bacteria.</li>
                                <li><b>Oral Medications:</b> For more severe cases, oral antibiotics or hormonal treatments (such as birth control pills) may be prescribed to reduce inflammation and treat acne from within.</li>
                                <li><b>Advanced Treatments:</b> Depending on the persistence and severity of acne, your doctor might recommend advanced procedures like chemical peels, laser therapy, or microdermabrasion to reduce scars and improve skin texture.</li>
                                <li><b>Maintenance and Follow-Up:</b> After initial treatment, follow-up visits are crucial to monitor progress and make any necessary adjustments to the treatment plan. Maintaining skin health also involves adopting a good skincare routine, managing diet, and reducing stress.</li>
                            </ul>
                            
                            <h5><b>Why Choose Dr. Manoj K Johar for  Acne Treatment?</b></h5>
                            <p>Choosing Dr. Manoj K Johar for acne treatment in Delhi is a decision that promises expert care and effective results. Dr. Johar is renowned for his extensive expertise in dermatology and a personalized approach to skin care, making him a trusted name in acne treatment. He employs a comprehensive strategy that combines advanced diagnostic techniques with cutting-edge treatments tailored to the unique needs of each patient. Dr. Johar understands the impact of acne on both physical appearance and psychological well-being and is dedicated to offering solutions that not only clear the skin but also boost confidence.</p>
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

<!--</html>-->