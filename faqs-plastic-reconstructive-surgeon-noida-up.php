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
	$pageHeading = "FAQ's";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <?php
$pageTitle = 'FAQS- Acne FAQS, Hair Transplant FAQS| Dr. Manoj';

$pageDescription = 'FAQS-  Acne FAQS, Hair Transplant FAQS ect by Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR.';
$pagekeywords = 'Acne FAQS, Hair Transplant FAQS';
$canonicalurl ='https://www.theaesthetic.in/faqs-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'FAQS- Acne FAQS, Hair Transplant FAQS| Dr. Manoj';

$ogdescription= 'FAQS-  Acne FAQS, Hair Transplant FAQS ect by Dr. Manoj k Johar. He is the best plastic  surgeon in Vaishali, Noida & Delhi NCR.';

$ogurl ='https://www.theaesthetic.in/faqs-plastic-reconstructive-surgeon-noida-up/';

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
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>

<body>
    <?php if($accessibility){include 'includes/accessibility.php';}?>
    <div id="Container">
        <?php include 'includes/menu.php';?>
        <?php include 'includes/header.php';?>

        <div id="Banner-Container-S" role="presentation">
            <div id="Banner">
                <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/patient-info-plastic-reconstructive-surgeon-noida-up/">Patient Info</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
                <h1><?php echo $pageHeading; ?></h1>
            </div>
        </div>
        <div id="Content-Container" data-skip="Content">
            <div id="Content-Main">
                <div class="table-div">
                    <div id="Content" class="table-cell">

                        <article class="textMain ypocms">
                           <h2>Acne FAQS</h2>
 <button class="accordion">Q. What causes acne?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The most common causes include :</p>
   <ul>
     <li>Hormonal changes</li>
     <li>Puberty</li>
     <li>Dust and dirt</li>
     <li>Stressful or unhealthy lifestyle</li>
     <li>Side - effects of certain medicines</li>
     <li>Excess oil</li>
     <li>Clogged hair follicles</li>
   </ul>
 </div>
 <button class="accordion">Q. What are the symptoms of acne?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The most common symptoms include :</p>
   <ul>
     <li>Redness</li>
     <li>Irritated skin</li>
     <li>Whiteheads and blackheads</li>
     <li>Acne scars</li>
     <li>Pus - filled bumps</li>
     <li>Painful lumps on the skin</li>
     <li>Hyperpigmentation</li>
   </ul>
 </div>
 <button class="accordion">Q. Can I use makeup if I have acne?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Yes, you can use makeup (light makeup) though it is advisable to avoid putting anything on the affected areas. Do not forget to remove your makeup before sleeping.</p>
 </div>
 <button class="accordion">Q. What precautions can I take to control or prevent acne?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Some of the precautions :</p>
   <ul>
     <li>Follow skin care regime advised by our experts
     <li>Don&rsquo;t pop your acne as it will leave scar
     <li>Don&rsquo;t over - exfoliate your skin
     <li>Follow the acne prevention treatment plan as advised
   </ul>
 </div>
 <button class="accordion">Q. How many sittings are required for the procedures to work effectively?</button>
 <div class="panel">
   <p style="margin-left:7px">A. There is no fixed number of sittings as the treatment is customized depending on the type and location of your acne, and according to that assessment, treatments are advised by our experts. Procedures are hassle - free and less time consuming which make them easy, comfortable and go - to options for acne treatments.</p>
 </div>

 <h2>Hairfall/ Hairloss FAQS</h2>
 <button class="accordion">Q. How to know if someone is losing hair suddenly in an unhealthy manner, and it requires physical intervention?</button>
 <div class="panel">
   <p style="margin-left:7px">A. You can look out for certain signs :</p>
   <ul>
     <li>Constant hair fall</li>
     <li>Partial/total hair loss</li>
     <li>Little to no hair regrowth ability</li>
     <li>Thinning of hair</li>
     <li>Weakening of roots (hair follicles)</li>
     <li>Decreased hair volume</li>
   </ul>
 </div>
 <button class="accordion">Q. What nutrients are good for the hair?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Nutrients like iron, Vitamin D, B12, A, C &amp; E, microminerals and protein are extremely crucial for enhancing scalp health and hair strength.</p>
 </div>
 <button class="accordion">Q. How to prepare for procedures?</button>
 <div class="panel">
   <p style="margin-left:7px">A. There are different approaches available for these procedures. Our expert group of doctors would give you proper instructions and recommendations before the treatment.</p>
 </div>
 <button class="accordion">Q. Are these procedures safe?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Completely safe. Some discomfort may be there for a day or two but subsides later.</p>
 </div>
 <button class="accordion">Q. What is the recovery time?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Most people can continue their daily activities following the procedure.</p>
 </div>
 <button class="accordion">Q. How soon can I see the results?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The results take time and vary from person to person and also from procedure to procedure. A change might be seen after 3 months of the procedure and usually take upto six to nine months.</p>
 </div>
 <h2>Hair Transplant FAQS</h2>
 <button class="accordion">Q. How to prepare for a hair transplant?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Our doctors would give you proper instructions and recommendations before the treatment.</p>
 </div>
 <button class="accordion">Q. Is it safe?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Completely safe. There can be some discomfort, swelling and pain after surgery. Post-surgery medications are prescribed for faster recovery.</p>
 </div>
 <button class="accordion">Q. What is the recovery time?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Most people can continue their daily activities following this procedure.</p>
 </div>
 <button class="accordion">Q. How soon can I see the results?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The results take time and vary from person to person and also from procedure to procedure. A change might be seen after 3 months of the procedure and usually take upto six to nine months.</p>
 </div>
 <button class="accordion">Q. Will the new hair look real or fake?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The new hair will look real because it will be real hair.</p>
 </div>
 <h2>Gynaecomastia FAQS </h2>
 <button class="accordion">Q. Why does gynaecomastia occur?</button>
 <div class="panel">
   <p style="margin-left:7px">A. It is mostly related to pubertal hormonal changes but other factors are also there like</p>
   <ul>
     <li>Obesity</li>
     <li>Alcohol or drug intake</li>
     <li>Diet</li>
     <li>Steroids consumption</li>
   </ul>
 </div>
 <button class="accordion">Q. Can Gynaecomastia go away with exercise?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Not really. Even though exercise is a part of treatment after surgery but surgery is the only solution.</p>
 </div>
 <button class="accordion">Q. Are there any risks in Gynaecomastia surgery?</button>
 <div class="panel">
   <p style="margin-left:7px">A. There can be some discomfort, swelling and pain after surgery but subsides later on.</p>
 </div>
 <button class="accordion">Q. Will it leave scars?</button>
 <div class="panel">
   <p style="margin-left:7px">A. It may or may not leave scars, depending on the precision of the surgeon and the type of procedure planned. However, nowadays, laser treatment are advised for scar modulation, so even if there are scars, they can be taken care.</p>
 </div>
 <button class="accordion">Q. How long will results last?</button>
 <div class="panel">
   <p style="margin-left:7px">A. The results are usually long –term. However, weight gain, steroid or drug use and hormone fluctuations may lead to recurrence </p>
 </div>
 <h2>Vaginal rejuvenation FAQS</h2>
 <button class="accordion">Q. Is the treatment permanent?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Depends on the type of treatment you go for. Surgical treatments stay for longer duration whereas non surgical ones have to be done in repeated sessions. </p>
 </div>
 <button class="accordion">Q. How soon can we have intercourse after the surgery?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Most patients should plan to abstain from sexual intercourse for a minimum of 3-4 weeks after vaginoplasty, though your surgeon may recommend that you wait even longer to ensure the healing process is complete. </p>
 </div>
 <button class="accordion">Q. Is it painful?</button>
 <div class="panel">
   <p style="margin-left:7px">A. There can be some discomfort, swelling and pain after surgery but subsides later on.</p>
 </div>
 <button class="accordion">Q. Will it affect my reproductive ability?</button>
 <div class="panel">
   <p style="margin-left:7px">A. No, it will not affect your reproductive ability. The surgery is to enhance vagina's functionality not to hinder it.</p>
 </div>
 <h2>Hymenoplasty FAQS</h2>
 <button class="accordion">Q. What can cause a hymen tear?</button>
 <div class="panel">
   <p style="margin-left:7px">A. There can be quite a few causes :</p>
   <ul>
     <li>Intercourse </li>
     <li>Tampon placement </li>
     <li>Strenuous exercises</li>
     <li>Riding a bike, cycle, horse</li>
     <li>Swimming </li>
     <li>Accident </li>
     <li>Dancing</li>
   </ul>
 </div>
 <button class="accordion">Q. Is it painful?</button>
 <div class="panel">
   <p style="margin-left:7px">A. It is not painful as the surgery involves general anaesthesia. There can be some discomfort, swelling and pain after surgery but subsides later on.</p>
 </div>
 <button class="accordion">Q. Can I walk after hymenoplasty?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Hymenoplasty surgery is not a major procedure and you will be in a good physical state after your surgery. You will be able to walk, sit and lie down without pain or problems. It is a daycare procedure. You can also return to your job and regular lifestyle 1 or 2 days after your surgery.</p>
 </div>
 <h2>Liposuction FAQS</h2>
 <button class="accordion">Q. Is liposuction is a weight loss procedure?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Liposuction is not for obesity, and it’s a misconception that liposuction is a weight-loss treatment. Rather, it’s a fat reduction procedure. </p>
 </div>
 <button class="accordion">Q. Is it painful?</button>
 <div class="panel">
   <p style="margin-left:7px">A. It is not painful as usually local/general anaesthesia is used depending upon the area being treated. There can be some discomfort, swelling and pain after surgery but subsides later on. </p>
 </div>
 <button class="accordion">Q. Will I gain the fat back after liposuction?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Fat removal via liposuction is permanently removed; however, we recommend you maintain a stable weight to keep new fat from coming back to problem areas. Be sure to exercise and eat a healthy diet to help achieve long-lasting results.</p>
 </div>
 <button class="accordion">Q. Does Liposuction Treatment Leave A Scar?</button>
 <div class="panel">
   <p style="margin-left:7px">A. Liposuction is a surgical procedure, a scar(s) is evident. Whenever possible, the incisions are hidden in a natural skin crease or fold to be unnoticeable and usually fades with time. Laser treatments are also now available for scar modulation.</p>
 </div>
                        </article>
                    </div>
                    <?php include 'includes/sidebar.php';?>
                </div>
            </div>
        </div>
        <?php include 'includes/usefull-links.php';?>
        <?php include 'includes/footer.php';?>
    </div>
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
    <!-- keep this before closing body tag -->
    <?php include 'common/scripts-compress.php'?>
</body>

</html>