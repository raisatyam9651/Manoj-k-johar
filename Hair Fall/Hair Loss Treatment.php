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
	$pageHeading = "Acne Treatment";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Acne Treatment| Best Acne  Treatment| Dr. Manoj K Johar</title>
<meta name="description" content="Get rid of your acne and improve the texture of your skin. We  offer treatments that use the best peels, LASER, radiofrequency, nutraceuticals, cosmeceuticals and IV infusion therapy">
<meta name="keywords" content="amputation prevention service, limb trauma, venous ulcers, trophic ulcers, gunshot injuries, brachial plexus, peripheral nerve injuries, firearm injuries, animal bites, charcot foot, electrical burns, limb tumours, advanced surgery for amputation prevention service">
<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" />

<!----bootstrap-file------------->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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


<style>
    .col-block{
        width:50%;
        padding-left:15px;
        padding-right:15px;
        float:left;
    }
    @media screen and (max-width:768px){
        .col-block{
            width:100%;
        }
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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <a href="/services-plastic-reconstructive-surgeon-noida-up/">Services</a> <?php echo $breadCrumbSeparator; ?> <a href="/surgical-treatments-plastic-reconstructive-surgeon-noida-up/">Surgical Treatments</a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
            <article class="textMain ypocms">
                <h2>What is Acne?</h2>
                <p>Acne is a skin condition caused by clogging of hair follicles with oil and dead skin cells. It causes scars, redness, whiteheads, blackheads or pimples. It can vary in size and type</p>
                <h2>Types :</h2>
                <p><b>Non - inflammatory</b></p>
                <ul>
                    <li>Blackheads</li>
                    <li>Whiteheads</li>
                </ul>
                <p><b>Inflammatory</b></p>
                <div class="row">
                    <div class="col-block">
                        <ul>
                            <li>Cysts</li>
                            <li>Pustules</li>
                        </ul>
                    </div>
                    <div class="col-block">
                        <ul>
                            <li>Papules</li>
                            <li>Nodules</li>
                        </ul>
                    </div>
                </div>
                <h3>What is Acne Treatment?</h3>
                <p>It is a treatment plan consisting of various methods specialised to treat acne and improve the appearance and texture of the skin. During most of these procedures, the affected skin is chemically exfoliated and it eventually peels off, revealing a new layer of skin from underneath that appears smoother and less damaged. </p>
                <h2>Benefits:</h2>
                <div class="row">
                    <div class="col-block">
                        <ul>
                            <li>Treats acne, blackheads, whiteheads and pimples</li>
                            <li>Accelerates skin repair and wound healing</li>
                            <li>Unclogs pores</li>
                            <li>Re-texturizes the skin</li>
                        </ul>
                    </div>
                    <div class="col-block">
                        <ul>
                            <li>Calms irritation</li>
                            <li>Softens fine lines and wrinkles</li>
                            <li>Cancels the redness and fades discolorations</li>
                        </ul>
                    </div>
                </div>
                <div class="blank-block" style="width:100%;">
                    
                </div>
                <!--<ul>-->
                <!--    <li>Treats acne, blackheads, whiteheads and pimples</li>-->
                <!--    <li>Accelerates skin repair and wound healing</li>-->
                <!--    <li>Unclogs pores</li>-->
                <!--    <li>Re-texturizes the skin</li>-->
                <!--    <li>Calms irritation</li>-->
                <!--    <li>Softens fine lines and wrinkles</li>-->
                <!--    <li>Cancels the redness and fades discolorations</li>-->
                <!--</ul>-->
                <h2>Treatment by Dr. Johar’s Plastic Surgery Group </h2>
                <p>You will meet our team members and your doctor will personally evaluate your condition and will ask your health history. You will have an opportunity to discuss treatment options and the recommended course of treatment, explore outcomes of procedures and the potential risks and complications associated, and get your questions answered. We  offer different types of procedures depending on the nature and location of acne. There is absolute transparency during the treatment. We also offer acne scar treatments</p>
                
                <h2>Say No To Acne, Yes To Healthy And Smooth Skin - Experience The Best Acne Treatment In Delhi, Noida, Vaishali, Ghaziabad</h2>
                <p>Acne can make your skin look unhealthy, rough and dull. If you are looking for a way to get rid of your acne and get flawless - looking skin, look no further! Our doctors at Dr. Johar’s Plastic surgery will give you the best acne treatment option in town.</p>
                
                                                               
    <p class="hr"></p>
                            <h2 class="related-tabs">Surgical Treatments</h2>
                            <div class="surgical-treatments" id="surgical-treatments">
                                <div id="services-list"></div>
                            </div>                                                                                                                                             	
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