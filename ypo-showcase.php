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
	$pageHeading = "YPO Showcase";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $pageHeading; ?></title>
<meta name="description" content="<?php echo $metaInfo; ?>">
<meta name="keywords" content="<?php echo $metaInfo; ?>">
<meta property="og:title" content="<?php echo $metaInfo; ?>" />
<meta property="og:description" content="<?php echo $metaInfo; ?>" />
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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> <?php echo $pageHeading; ?></div>
     <h1><?php echo $pageHeading; ?></h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
        
 <h2>YPO Showcase</h2>
                            <?php $host = $_SERVER['HTTP_HOST'];
                            $website_string = $host;
                            $xmldoc = simplexml_load_file("https://www.yourpracticeonline.com.au/showcase/showcase.xml");
                            if ($xmldoc->showcase) {
                                $i = 0;
                                foreach ($xmldoc->showcase as $item) {
                                    $client = $item->item;
                                    $showcase[$i]['title'] = (string) $client->title;
                                    $showcase[$i]['link'] = (string) $client->link;
                                    $showcase[$i]['description'] = (string) $client->description;
                                    $showcase[$i]['image'] = (string) $client->image;
                                    $showcase[$i]['pubDate'] = (string) $client->pubDate;
                                    $showcase[$i]['category'] = (string) $client->category;
                                    $showcase[$i]['order'] = (string) $client->order;
                                    $showcase[$i]['type'] = (string) $client->type;
                                    $i++;
                                }
                            }
                            function seoShuffle($items, $string)
                            {
                                mt_srand(strlen($string));
                                for ($i = count($items) - 1; $i > 0; $i--) {
                                    $j = @mt_rand(0, $i);
                                    $tmp = $items[$i];
                                    $items[$i] = $items[$j];
                                    $items[$j] = $tmp;
                                }
                            }
                            seoShuffle($showcase, $website_string); ?>
                            <h2>Most recent website developments</h2>
                            <div class="showcase">
                                <?php for ($s = 0; $s < count($showcase); $s++) {
                                    $link = $showcase[$s]['link'];
                                    $title = $showcase[$s]['title'];
                                    $description = $showcase[$s]['description'];
                                    $image = $showcase[$s]['image'];
                                    $pubDate = $showcase[$s]['pubDate'];
                                    $category = $showcase[$s]['category'];
                                    $order = $showcase[$s]['order'];
                                    $type = $showcase[$s]['type'];
                                    if ($s % 2 == 0) { ?>
                                        <div class="ypo-l"><a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" /></a>
                                            <h4><a href="<?php echo $link; ?>" target="_blank" class="sho-header"><?php echo $title; ?></a></h4>
                                            <p>
                                                <?php echo $description; ?>
                                            </p>
                                            <p>
                                                <a href="<?php echo $link; ?>" target="_blank" class="bodytext-link">
                                                    <?php echo $link; ?>
                                                </a>
                                            </p>
                                            <div class="clear-float"></div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="ypo-r"><a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" /></a>
                                            <h4><a href="<?php echo $link; ?>" target="_blank" class="sho-header"><?php echo $title; ?></a></h4>
                                            <p>
                                                <?php echo $description; ?>
                                            </p>
                                            <p>
                                                <a href="<?php echo $link; ?>" target="_blank" class="bodytext-link">
                                                    <?php echo $link; ?>
                                                </a>
                                            </p>
                                            <div class="clear-float"></div>
                                        </div>
                                <?php }
                                } ?>
                            </div>        
    
          </article>
         </div>
      </div>
    </div>
  </div>
<?php include 'includes/usefull-links.php';?>
<?php include 'includes/footer.php';?></div>
<!-- keep this before closing body tag --> 
<?php include 'common/scripts-compress.php'?>
</body>
</html>