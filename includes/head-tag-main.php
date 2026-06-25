<meta http-equiv="content-type, Cache-control" content="public, text/html;charset=UTF-8" />
<meta content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" name="SKYPE_TOOLBAR">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=1" />
<meta name="google-site-verification" content="x_cvgj1OyBEhkIYCnAt5k5a3QeGxK2W5hqWqX0tHL4c" />
<meta name="google-site-verification" content="9zlK5QmnIwRgd9iqRQtFBollzQDD6_RE6CgY66jFP5o" />
 <!-- meta keywords starts -->
 <title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>"/>
<meta name="keywords" content="<?php echo $pagekeywords; ?>"/>
<meta name="robots" content="index, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<!-- <link rel="canonical" href="<?php echo $canonicalurl; ?>" /> -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $ogtitle; ?>" />
<meta property="og:description" content="<?php echo $ogdescription; ?>" />
<meta property="og:url" content="<?php echo $ogurl; ?>" />
<meta property="og:site_name" content="<?php echo $ogsitename; ?>" />
<meta property="og:image" content="<?php echo $ogimageurl; ?>" />
<meta property="og:image:secure_url" content="<?php echo $ogimagesecureurl; ?>"/>
<meta property="og:image:width" content="1383" />
<meta property="og:image:height" content="499" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@DrManojJohar" />
<meta name="twitter:description" content="<?php echo $twdescription; ?>" />
<meta name="twitter:title" content="<?php echo $twtitle; ?>" />
<meta name="twitter:image" content="<?php echo $twimageurl; ?>" />

<meta name="yandex-verification" content="0c7cc082c8683066" />
<meta name="ahrefs-site-verification" content="6c0178b901b03b4b36c680693907676ec07d5a9566b144f15c8a03410705d507">
<meta name="msvalidate.01" content="AA9F499B1F4DE38F8CCC2D8F40301C40" />
<meta name="p:domain_verify" content="1c60461eb2d4703552fbda11d8007b73"/>
<meta name="geo.region" content="IN-DL" />
<meta name="geo.position" content="28.611166;77.337034" />
<meta name="ICBM" content="28.611166, 77.337034" />

<meta name="geo.region" content="IN-UP" />
<meta name="geo.position" content="28.656573;77.36586" />
<meta name="ICBM" content="28.656573, 77.36586" />

<meta name="geo.region" content="IN-UP" />
<meta name="geo.placename" content="Noida" />
<meta name="geo.position" content="28.535633;77.391073" />
<meta name="ICBM" content="28.535633, 77.391073" />


<?php include 'common/css.php';?>
<?php if($developerMode == 'on'){
	echo "<script src='".JQUERY_LIBRARY_FILE."'></script>";
}else{
	echo "<script>".fileGetContents(JQUERY_LIBRARY_FILE)."</script>";
}?>
<?php
// Javascript configuration starts
$jsConfig = "jQuery(function($){
$('body').ypoPlugin({
		multiMedia: '$multiMedia',
		scroller: $scroller,
		menuWidth: $menuWidth,
		mobileMenu: $mobileMenu,
		slideMenu: $slideMenu,
		slideType: '$slideType',
		mobileMenuStartsFrom: '$mobileMenuStartsFrom',
		siteMap: $siteMap,
		siteMapUrl: '$siteMapUrl',
		countryCode: $countryCode,
		showCountryCode: $showCountryCode,
		phoneNumbers: $phoneNumbers,
		phoneInfos: $phoneInfos,
		phoneLinks: $phoneLinks,
		faxNumbers: $faxNumbers,
		faxInfos: $faxInfos,
		responseHeight: $responseHeight,
		responseHeight_upto: $responseHeight_upto,
		responseList: $responseList,
		swapBanner: $swapBanner,
		swapBanner_after: $swapBanner_after,
		accordion: $accordion,
		tabAccord: $tabAccord,
		tabAccord_upto: $tabAccord_upto,
		stickyHeader: $stickyHeader,
		stickyHieght: $stickyHieght,
		onView: $onView,
		onViewList: $onViewList,
		parallaxEffect: $parallaxEffect,
		parallaxList: $parallaxList,
		gdpr: $gdpr,
		accessibility: $accessibility,
		fontResize: $fontResize,
		fontResizeList: $fontResizeList,
		removeElements: $removeElements,
		removeId: $removeId,
		removeClass: $removeClass
	});
});";
$jsConfig = trim(preg_replace('/\s\s+/', ' ', $jsConfig));
// Javascript configuration starts ends	
?>
<script><?php echo $jsConfig?></script>
<?php echo compressJs('headJsFiles', $developerMode);?>
<!-- Use this file to add any custom code needs to be add in head tag -->
<?php include 'configs/head-tag-common.php';?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-189034430-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-189034430-1');
</script>
<!-- Start cookies banner --><script defer src="https://ckm.yourpractice.online/2014wu4A6uVjQEv/script.js" type="text/javascript"></script><!-- End cookies banner -->