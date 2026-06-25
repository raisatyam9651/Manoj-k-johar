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
	$pageHeading = "Preview";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $metaInfo; ?></title>
<meta name="description" content="<?php echo $metaInfo; ?>">
<meta name="keywords" content="<?php echo $metaInfo; ?>">
<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" />
<?php include 'includes/head-tag-main.php';?>
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
      </div></div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
         
          <article class="textMain ypocms">
            
        
            <p>What is Lorem Ipsum?</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
                
            <!-- Iframe example -->
            <p>Iframe example</p>
            <div class="videoBorder"><iframe class="lazy" src="<?php echo LOADER_SMALL; ?>" data-src="https://www.ypo.education/product_tour/"></iframe></div>
        
            <!-- Image example -->
            <p>Image example<br>
            <img class="lazyload" src="#" data-src="<?php echo IMG_PATH; ?>image.jpg" alt="alt text"></p>
        
            <!-- 3D Image example -->
            <p>3D Image example<br>
            <img class="lazyload" src="#" data-src="<?php echo THREE_D_IMG_PATH; ?>image.jpg" alt="alt text"></p>
        
            <!-- Element background image example -->
            <p>Element background image example</p>
            <p class="lazy" data-src="<?php echo IMG_PATH; ?>image.jpg" style="height:388px; background-repeat:no-repeat;"></p>


          </article>
        </div>
      </div>
    </div>
  </div>

<?php include 'includes/footer.php';?></div>
<!-- keep this before closing body tag --> 
<?php include 'common/scripts-compress.php'?>
</body>
</html>