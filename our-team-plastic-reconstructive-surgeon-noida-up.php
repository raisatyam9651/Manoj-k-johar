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
	$pageHeading = "Our Team";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <?php
$pageTitle = 'Our Team | Dr Manoj K Johar | Plastic and Reconstructive Surgeon Delhi';
$pageDescription = 'Click here to view our team members of plastic and reconstructive surgeon Dr Manoj K Johar.';
$pagekeywords = 'Dr. manoj johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery';
$canonicalurl ='https://www.theaesthetic.in/our-team-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Our Team | Dr Manoj K Johar | Plastic and Reconstructive Surgeon Delhi';

$ogdescription= 'Click here to view our team members of plastic and reconstructive surgeon Dr Manoj K Johar.';

$ogurl ='https://www.theaesthetic.in/our-team-plastic-reconstructive-surgeon-noida-up/';

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
                <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/about-us-vision-mission-plastic-reconstructive-surgeon-noida-up/">About Us </a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
                <h1><?php echo $pageHeading; ?></h1>
            </div>
        </div>
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">

                            <h2>Clinical Team</h2>
                            <ul class="prfl-list-sp">
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-manoj-johar.jpg" alt="Dr. Manoj K Johar, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-manoj-k-johar-plastic-reconstructive-surgeon-noida-up/">Dr. Manoj K Johar <span>Principal Director &amp; Group Head</span></a></h3>
                                        <p><i>Dr. Manoj K. Johar </i>is Director, Plastic Surgery and Head of Department, Max Super Specialty Hospital Zone 2, NCR. An authority in Cosmetic and Laser Aesthetic Surgery, <i>Dr. Johar</i> is a distinguished Alumni of from the prestigious CMC Ludhiana and has received various trainings from Harvard University, SUNY, ESC SHARPLAN and Uppsala University.</p>
                                        <div class="view-prof"><a href="/dr-manoj-k-johar-plastic-reconstructive-surgeon-noida-up/">View Profile</a></div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-rohit-chandra-img-th1.jpg" alt="Dr. Rohit Chandra, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-rohit-chandra-plastic-reconstructive-surgeon-noida-up/">Dr. Rohit Chandra<span>Principal Consultant - Department of Plastic Surgery</span></a></h3>
                                        <p><i>Dr. Rohit Chandra is Principal Consultant, a specialised Oral & Maxillofacial Surgeon (Facio-Maxillary) with 15 years of rich experience in Face & Jaw Surgeries. His surgical & clinical expertise covers the entire spectrum from simple Facial Surgeries, Orthognathic Surgery, Jaw Contouring and reconstruction surgery to complex Craniofacial Surgery</i></p>
                                        <div class="view-prof"><a href="/dr-rohit-chandra-plastic-reconstructive-surgeon-noida-up/">View Profile</a></div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                               <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-pradeep-k-singh.jpg" alt="Dr. Pradeep K Singh, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-pradeep-k-singh-plastic-reconstructive-surgeon-noida-up/">Dr. Pradeep K Singh <span>Principal Consultant</span></a></h3>
                                        <p><i>Dr. Pradeep K. Singh </i>is a Principal Consultant, Max Super Specialty Hospital Zone 2, NCR. Dr. Singh is a distinguished Alumni of SMS Medical College, Jaipur. Dr. Pradeep K. Singh also has a lot of experience in the field in various institutions.</p>
                                        <div class="view-prof"><a href="/dr-pradeep-k-singh-plastic-reconstructive-surgeon-noida-up/" title="best plastic surgery hospital in Delhi NCR">View Profile</a></div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                 <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-kamlesh-kumar-profile-image-upd.jpg" alt="Dr. Kamlesh Kumar, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up/">Dr. Kamlesh Kumar <span>Senior Consultant - Department of Plastic Surgery</span></a></h3>
                                        <p><i>Dr. Kamlesh Kumar is a Senior Consultant Plastic and Reconstructive Surgeon with advanced training and expertise in both functional and aesthetic procedures. Known for his precision and patient-focused approach, Dr. Kumar has extensive experience in treating a wide range of conditions-from complex trauma and burn reconstruction to cosmetic enhancements.</i></p>
                                        <div class="view-prof"><a href="/dr-kamlesh-kumar-plastic-reconstructive-surgeon-noida-up/" title="best plastic surgery hospital in Delhi NCR">View Profile</a></div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                
                                
                                <!--<li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-abid-saleem.jpg" alt="Dr. Abid Saleem, best plastic surgery hospital in Delhi NCR">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name"><a href="/dr-abid-saleem-plastic-reconstructive-surgeon-noida-up/"title="best plastic surgery hospital in Delhi NCR">Dr. Abid Saleem <span>Consultant</span></a></h3>
										<p><i>Dr. Abid Saleem,</i> Consultant at Max Super Specialty Hospital Zone 2, NCR. Dr. Abid Saleem has done his MBBS from the University of Jammu, J&K. He has a lot of experience as a Senior Resident – Plastic Surgery, SKIMS, Srinagar.</p>
										<div class="view-prof"><a href="/dr-abid-saleem-plastic-reconstructive-surgeon-noida-up/">View Profile</a></div>
									</div>
									<div class="clear-float"></div>
								</li>-->
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>lalit-agarwal.jpg" alt="Dr. Lalit Agrawal, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-lalit-agrawal-plastic-reconstructive-surgeon-noida-up/">Dr. Lalit Agrawal <span>Senior Consultant – Department of Plastic Surgery<!--Senior Consultant Plastic and Reconstructive Surgeon--></span></a></h3>
                                        <p><i>Dr. Lalit Agrawal is a Senior Consultant Plastic and Reconstructive Surgeon. For Dr. Agrawal, Plastic surgery is where technical excellence meets artistic intuition. Specialising in various reconstructive and cosmetic procedures like Fat grafting, gynecomastia, breast reconstruction/ corrections, body contouring, Rhinoplasty with focus on natural look results.</i></p>
                                        <div class="view-prof"><a href="/dr-lalit-agrawal-plastic-reconstructive-surgeon-noida-up/">View Profile</a> </div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-sanjeev-dua.jpg" alt="Dr. Sanjeev Dua, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name"><a href="/dr-sanjeev-dua-plastic-reconstructive-surgeon-noida-up/">Dr. Sanjeev Dua <span>Senior Director - Department of NeuroSciences</span></a></h3>
                                        <p><i>Dr. Sanjeev Dua </i>is Senior Director, Dept of Neurosciences, Max Super Specialty Hospital. He is an accomplished Spine Surgeon with over 35 years of experience in CV Junction, Cervical Spine, Dorsal, Lumbar and Sacral areas, Paediatric Neurosurgery &amp; Brain Tumour Surgeries.</p>
                                        <div class="view-prof"><a href="/dr-sanjeev-dua-plastic-reconstructive-surgeon-noida-up/">View Profile</a> </div>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                            
                            <p class="hr"></p>
                            
                            <ul class="prfl-list-sp non-clincl-lst">
                                <!--<li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-sonal.jpg" alt="Dr. Sonal, best plastic surgery hospital in Delhi NCR">
									</div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Sonal <span>Clinical Associate</span></h3>
									</div>
									<div class="clear-float"></div>
								</li>-->
                               <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-ankur-bhatia.jpg" alt="Dr. Ankur Bhatia, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Ankur Bhatia <span>Consultant</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>lalit-agarwal.jpg" alt="Dr. Lalit Agrawal, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Lalit Agrawal <span>Consultant</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                 <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-aaquib-hussain-img-th1.jpg" alt="Dr. Aaquib Hussain">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Aaquib Hussain <span>Attending Consultant</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>


<!--

                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-rahul-jain.jpg" alt="Dr. Rahul Jain Senior Fellow">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Rahul Jain <span>Consultant</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
-->
                                
                                 <!--<li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>asha-kushalini.jpg" alt="Dr. Asha Khushalani Associate Consultant">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Asha Khushalani <span>Associate Consultant</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->


                               <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>pranam-nirangjan.jpg" alt="Dr Pranam Nirangjan">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Pranam Nirangjan<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                 <!--<li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>aparna-rawal.jpg" alt="Dr Aparna Rawal">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Aparna Rawal<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                  <!--<li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>ashish-kemmu.png" alt="Dr Aashish Kemmu">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Aashish Kemmu<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                  <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>jahanvi-mishra.jpg" alt="Dr Jahanvi Mishra">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Jahanvi Mishra<span>Clinical Associate<!--Fellow--></span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-pallavi-agrawal-img-th.jpg" alt="Dr Pallavi Agrawal">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Pallavi Agrawal<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                                <ul class="prfl-list-sp non-clincl-lst">
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-habiba-s-qazi-img-th.jpg" alt="Dr Habiba S. Qazi">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Habiba S. Qazi<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-navneet-singh-img-th.jpg" alt="Dr Navneet Singh">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Navneet Singh<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                    
                                    <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-anupama-bashishth-chauhan-img-th.jpg" alt="Dr Anupama Bashishth Chauhan">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Anupama Bashishth <br>Chauhan<span>Fellow</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                    
                                    <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-digjeet-kaur-img-th.jpg" alt="Dr. Digjeet Kaur">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Dr. Digjeet Kaur<span>Clinical Research Associate</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                    
                                    
                                    
                                
                                <!--<li>
									<div class="dr-img">
									<img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>dr-janmesh-m-galvankar.jpg" alt="Dr. Janmesh M. Galvankar, best plastic surgery hospital in Delhi NCR"></div>
									<div class="dr-txt">
										<h3 class="prfl-name">Dr. Janmesh M. Galvankar <span>Fellow</span></h3>
									</div>
									<div class="clear-float"></div>
								</li>-->
                            </ul>
                            <p class="hr"></p>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>mrs-ruchika-gupta-new.jpg" alt="Mrs. Ruchika Gupta, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Mrs. Ruchika Gupta <span>Managing Partner</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>ms-akanksha-kangra.jpg" alt="Ms. Akanksha Kangra, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Akanksha Kangra<span>Program Coordinator</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                               <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>shweta-pant.jpg" alt="Shweta Pant ">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Shweta Pant <span>Department Coordinator</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>-->
                                
                                 <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>shalini.jpg" alt="Ms. Shalini">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Shalini <span>Department Coordinator</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                                
                                <ul class="prfl-list-sp non-clincl-lst">

 <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>riya-varshiney.jpg" alt="Ms. iya Varshney">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Riya Varshney <span>Executive</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>

                                 <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>ms-tabassum-img-th.jpg" alt="Ms. Tabassum">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Tabassum <span>Executive</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>ms-vandana-pal-img-th.jpg" alt="Ms. Vandana Pal">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Vandana Pal <span>Marketing Coordinator</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                            </ul>
                            
                            
                            <p class="hr"></p>
                            <h2>Paraclinical Team</h2>
                            <ul class="prfl-list-sp non-clincl-lst">
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>mr-gorav-kumar.jpg" alt="Mr. Gorav Kumar, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Mr. Gorav Kumar <span>Senior technician</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                               <!-- <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>mr-kishan.jpg" alt="Mr. Kishan, best plastic surgery hospital in Delhi NCR">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Mr. Kishan <span>Technician</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
-->
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>mr-gulfam-img-th1.jpg" alt="Ms. Gulfam">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Gulfam <span>Technician</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>mr-geetanshu-khoba-img-th.jpg" alt="Ms. Geetanshu Khoba">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Geetanshu Khoba <span>Technician</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                                <li>
                                    <div class="dr-img">
                                        <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>ms-himanshi-img-th.jpg" alt="Ms. Himanshi">
                                    </div>
                                    <div class="dr-txt">
                                        <h3 class="prfl-name">Ms. Himanshi <span>Aesthetic Technician</span></h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </li>
                                
                            </ul>
                            <h2>Cosmetic Surgeons, Laser Aesthetic Surgeon</h2>

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
