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
	$pageHeading = "Post-op Instructions";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <?php
$pageTitle = 'Postoperative care at home | Dr. Manoj K Jhor';

$pageDescription = 'Looking for a postoperative care option that is convenient and tailored to your needs? Look no further than Dr. Manoj K Jhor! He offers comprehensive home care services that can help you recover quickly and comfortably.';
$pagekeywords = 'Dr. Manoj K johar, plastic surgeon, Best Plastic Surgeon in Noida, Best Plastic Surgeon in Delhi NCR, Best Plastic Surgeon in Vaishali, Best Plastic Surgeon in East Delhi, reconstructive surgeon, plastic surgery, cancer reconstruction surgery';
$canonicalurl ='https://www.theaesthetic.in/post-op-instructions-plastic-reconstructive-surgeon-noida-up/';

$ogtitle = 'Postoperative care at home | Dr. Manoj K Jhor';

$ogdescription= 'Looking for a postoperative care option that is convenient and tailored to your needs? Look no further than Dr. Manoj K Jhor! He offers comprehensive home care services that can help you recover quickly and comfortably.';

$ogurl ='https://www.theaesthetic.in/post-op-instructions-plastic-reconstructive-surgeon-noida-up/';

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
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '351897443227700');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=351897443227700&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->    

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
           <h3>Postoperative Care</h3>
<p>Postoperative care is the care you receive after a surgical procedure. It often includes pain management and wound care. Before you have surgery, ask your doctor what the postoperative care will involve. This will give you time to prepare beforehand. Your doctor may revise some of their instructions after your surgery, based on how your surgery went and how well you&rsquo;re recovering.</p>
<h3>Postoperative care at home</h3>
<p>It&rsquo;s very important that you follow your doctor&rsquo;s instructions after you leave the hospital. Take medications as prescribed, watch out for potential complications, and keep your follow-up appointments.</p>
<p>Don&rsquo;t overdo things if you&rsquo;ve been instructed to rest. On the other hand, don&rsquo;t neglect physical activity if you&rsquo;ve been given the go ahead to move around. Start to resume normal activities as soon as you safely can. Most of the time, it&rsquo;s best to gradually return to your normal routine.</p>
<p>In some cases, you may not be able to care for yourself for a while after your surgery. If you don&rsquo;t have a family member or friend who can help, ask your doctor to recommend a professional caregiving service. Contact if you develop a fever, increased pain, or bleeding at the surgical site.</p>
<p>Appropriate follow-up care can help reduce your risk of complications after surgery and support your recovery process. Ask your doctor for instructions before you have your surgery and check for updates before you leave the hospital. Contact back if you suspect you&rsquo;re experiencing complications or your recovery isn&rsquo;t going well. With a little planning and proactive care, you can help make your recovery as smooth as possible.</p>
       
           
          </article>
         </div>
            <?php include 'includes/sidebar.php';?>
      </div>
    </div>
  </div>
<?php include 'includes/usefull-links.php';?>
<?php include 'includes/footer.php';?></div>
<!-- keep this before closing body tag --> 
<?php include 'common/scripts-compress.php'?>
</body>
</html>