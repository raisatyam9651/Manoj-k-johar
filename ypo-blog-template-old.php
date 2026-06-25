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
	$pageHeading = "Blog";
	$metaInfo = $pageHeading." | ".$copyRightText;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blog</title>
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
    <div class="navigation"><a href="/"><?php echo $breadCrumbHomeTitle; ?></a> <?php echo $breadCrumbSeparator; ?> {blog_breadcrumb}</div>
     <h1>{title}</h1>
      </div>
    </div>
  <div id="Content-Container" data-skip="Content">
    <div id="Content-Main">
      <div class="table-div">
        <div id="Content" class="table-cell">
          
          <article class="textMain ypocms">
        
       <h2>Blogs</h2>
                    <div class="blogMain">
                        
                    <ul class="pagelet-posts pagelet_919">
                        <li class="pagelet-post-28885">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/combining-plastic-surgery-with-nonsurgical-treatments-p28885.html">Combining plastic surgery with nonsurgical treatments</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 18-Feb-2022</span></div><p class="post-excerpt">Along with surgery, the use of combination pharmaceutical-grade skin medications can improve skin quality. While it is difficult for manufacturers to come up with a combination product, your plastic surgeon may be able to recommend the optimal combination of skin products that will enhance your skin, reduce fine wrinkles and improve skin discoloration.</p><p class="read-more"><a title="Read more about Combining plastic surgery with nonsurgical treatments" href="/healthcare-news-pl919/combining-plastic-surgery-with-nonsurgical-treatments-p28885.html"><span class="read-more-icon read-more-icon-28885"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-28884">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/take-a-load-off-your-back-with-a-breast-reduction-p28884.html">Take a load off your back with a breast reduction</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 18-Feb-2022</span></div><p class="post-excerpt">Breast reduction surgery is rated amongst the highest out of all plastic surgery procedures when it comes to patient satisfaction. Not only can it reduce or eliminate upper back, shoulder and neck pain from heavy breasts, a reduction can also help enhance self-esteem, get you back to exercise and improve the fit and shape of off-the-rack clothing and bras.</p><p class="read-more"><a title="Read more about Take a load off your back with a breast reduction" href="/healthcare-news-pl919/take-a-load-off-your-back-with-a-breast-reduction-p28884.html"><span class="read-more-icon read-more-icon-28884"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-28883">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/how-the-tummy-tuck-has-improved-over-the-decades-p28883.html">How the tummy tuck has improved over the decades</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 18-Feb-2022</span></div><p class="post-excerpt">The tummy tuck, also called abdominoplasty, has become one of the most popular cosmetic procedures in the United States in recent decades, but did you know that this procedure has been around since the early 1800s? Thankfully, the techniques and tools we use to perform modern tummy tucks have greatly improved over the past couple hundred years.</p><p class="read-more"><a title="Read more about How the tummy tuck has improved over the decades" href="/healthcare-news-pl919/how-the-tummy-tuck-has-improved-over-the-decades-p28883.html"><span class="read-more-icon read-more-icon-28883"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-27344">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/if-you-start-injectables-young-can-you-prevent-aging-p27344.html">If you start injectables young, can you prevent aging?</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 17-Nov-2021</span></div><p class="post-excerpt">The idea of prejuvenation is fairly new, with the term popping up in the last decade. It is held in contrast to rejuvenation, which is the effort to get back something lost – in this case, youthfulness. Prejuvenation is all about not feeling that loss. Rather than being reactive, it is proactive. It prevents signs of aging rather than treating them.</p><p class="read-more"><a title="Read more about If you start injectables young, can you prevent aging?" href="/healthcare-news-pl919/if-you-start-injectables-young-can-you-prevent-aging-p27344.html"><span class="read-more-icon read-more-icon-27344"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-27343">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/how-working-from-home-is-fueling-a-desire-for-facial-plastic-surgery-p27343.html">How working from home is fueling a desire for facial plastic surgery</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 17-Nov-2021</span></div><p class="post-excerpt">Since the pandemic began and people started working from home rather than the office, there has been a sharp increase in individuals seeking facial cosmetic procedures. This includes both med spa options and plastic surgery. White collar workers can both love their additional comforts and be suddenly more aware than ever of the things they want to change about their appearance.</p><p class="read-more"><a title="Read more about How working from home is fueling a desire for facial plastic surgery" href="/healthcare-news-pl919/how-working-from-home-is-fueling-a-desire-for-facial-plastic-surgery-p27343.html"><span class="read-more-icon read-more-icon-27343"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-27342">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/body-positivity-and-plastic-surgery-p27342.html">Body positivity and plastic surgery</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 17-Nov-2021</span></div><p class="post-excerpt">Body positivity is an incredible message, and one that truly melds well with what we do as plastic surgeons. We know all too well that the aesthetic procedures we offer are not a quick fix or a total makeover. Instead, when tastefully done, plastic surgery is a way to optimize someone's body to make them as comfortable as possible in their own skin.</p><p class="read-more"><a title="Read more about Body positivity and plastic surgery" href="/healthcare-news-pl919/body-positivity-and-plastic-surgery-p27342.html"><span class="read-more-icon read-more-icon-27342"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-26294">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/what-to-expect-after-your-breast-augmentation-surgery-p26294.html">What to expect after your breast augmentation surgery</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 20-Sep-2021</span></div><p class="post-excerpt">The operation is among the most recognizable examples of plastic surgery and has come to play a pivotal role in shaping the cultural understanding of the space for many years. Yet, even as roughly 200,000 Americans underwent breast augmentation in 2020 alone, confusion persists around its recovery process, and many patients remain unsure of what to expect after the procedure.</p><p class="read-more"><a title="Read more about What to expect after your breast augmentation surgery" href="/healthcare-news-pl919/what-to-expect-after-your-breast-augmentation-surgery-p26294.html"><span class="read-more-icon read-more-icon-26294"></span>Read more</a></p>
                        </li>
                        <li class="pagelet-post-24512">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/how-the-pandemic-may-have-increased-demand-for-cosmetic-procedures-p24512.html">How the pandemic may have increased demand for cosmetic procedures</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 29-Jun-2021</span></div><p class="post-excerpt">We've all caught ourselves staring at our own faces, and not everyone likes what they see. In fact, there has been a significant uptick in those exploring their cosmetic and surgical options since the pandemic began.</p><p class="read-more"><a title="Read More" href="/healthcare-news-pl919/how-the-pandemic-may-have-increased-demand-for-cosmetic-procedures-p24512.html">Read More</a></p>
                        </li>
                        <li class="pagelet-post-24511">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/weddings-and-plastic-surgery-a-likely-marriage-p24511.html">Weddings and plastic surgery a likely marriage</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 29-Jun-2021</span></div><p class="post-excerpt">In considering all of the details associated with your wedding day, thoughts might drift toward plastic surgery. The bride and groom (and their families) may pursue what plastic surgery can offer to meet the special day with improved levels of confidence.</p><p class="read-more"><a title="Read More" href="/healthcare-news-pl919/weddings-and-plastic-surgery-a-likely-marriage-p24511.html">Read More</a></p>
                        </li>
                        <li class="pagelet-post-24510">
                            <h3 class="post-title"><a href="/healthcare-news-pl919/getting-ready-for-the-summer-weve-all-been-waiting-for-p24510.html">Getting ready for the summer we`ve all been waiting for</a></h3><div class="post-meta-entry"><span class="meta-date"><strong>Posted on:</strong> 29-Jun-2021</span></div><p class="post-excerpt">It's finally here! The long-awaited summer of 2021. With vaccine rollout underway and restrictions loosening, there is so much to look forward to! There are celebrations, date nights and even vacations on the schedule, and people are more excited than ever to look their best for their big post-quarantine reveal.</p><p class="read-more"><a title="Read More" href="/healthcare-news-pl919/getting-ready-for-the-summer-weve-all-been-waiting-for-p24510.html">Read More</a></p>
                        </li>
                    </ul>
                    <div class="pagelet-pagination">
                        <font class="text1">Pages</font>
                        <font class="hrefpagination"><b>[1]</b></font>
                        <a href="/healthcare-news-pl919-2.html" class="bottomlink" title="Page 2">2</a> 
                        <font class="text1"> of 2 </font>  | <a href="/healthcare-news-pl919-2.html" class="bottomlink" title="Next Page"> <font class="hrefpagination"> Next</font></a> |  <a href="/healthcare-news-pl919-2.html" class="bottomlink" title="Last Page"><font class="hrefpagination">Last</font></a>  
                    </div>
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