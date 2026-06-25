<?php
	// Common file include
    include 'common/common.php';
	
	$pageHasCMSForm = 'false'; // Make true if the page has CMS form
	// Please include page related files here
    $pageRelatedJsFiles = array(
		//JS_PATH."responsiveslides.js",
		//JS_PATH."functions.js",
    );
	
	// Please include page related files here
    $pageRelatedCssFiles = array("inner.css");
	
	// Keep h1 tag text here
	$pageHeading = "Browser Upgarde Recommended";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageHeading." | ".$copyRightText; ?></title>
    <meta name="description" content="<?php echo $pageHeading." | ".$copyRightText; ?>">
    <meta name="keywords" content="<?php echo $pageHeading." | ".$copyRightText; ?>">
    <meta property="og:title" content="<?php echo $pageHeading." | ".$copyRightText; ?>" />
    <meta property="og:description" content="<?php echo $pageHeading." | ".$copyRightText; ?>" />
	<?php include 'includes/head-tag-main.php';?>
    <style>
		.no-support p{
			font-size:18px;
		}
		.no-support a{
			color:#0099cc;
		}
		.browsers a{
			display:inline-block;
			width:130px;
			margin-right:10px;
			text-align:center;
			text-decoration:none;
			color:#0099cc;
		}
		.browsers a:hover{
			text-decoration:underline;
		}
    </style>
</head>
<body>
<?php if($accessibility){include 'includes/accessibility.php';}?>
<div id="Container">
	<?php include 'includes/header.php';?>
    <?php include 'includes/menu.php';?>
    <div id="Banner-Container-S" role="presentation">
    <?php include 'includes/banner.php';?>
    </div>
    <div id="Content-Container" data-skip="Content">
        <div id="Content-Main">
            <div class="table-div">
                <div id="Content" class="table-cell">
                    <article class="textMain ypocms">
                        <div class="no-support">
                            <h1>Our website no longer supports Internet Explorer 8 (IE 8) or lower.</h1>
                            <p>To continue using, please upgrade your browser to <a href="<?php echo IE_BROWSER; ?>" target="_blank">Internet Explorer 9 (IE 9) or higher</a>, or use <a href="<?php echo CHROME_BROWSER; ?>" target="_blank">Goolge Chrome</a> or <a href="<?php echo FIREFOX_BROWSER; ?>" target="_blank">Firefox</a> or <a href="<?php echo SAFARI_BROWSER; ?>" target="_blank">Safari</a> browsers.</p>
                            <p>Use the links below to upgrade your existing browser.</p>
                            <div class="browsers">
                                <a href="<?php echo IE_BROWSER; ?>" target="_blank">
                                    <img src="<?php echo IE_BROWSER_ICON; ?>">Internet Explorer
                                </a>
                                <a href="<?php echo CHROME_BROWSER; ?>" target="_blank">
                                    <img src="<?php echo CHROME_BROWSER_ICON; ?>">Google Chrome
                                </a>
                                <a href="<?php echo FIREFOX_BROWSER; ?>" target="_blank">
                                    <img src="<?php echo FIREFOX_BROWSER_ICON; ?>">Mozilla Firefox
                                </a>
                                <a href="<?php echo SAFARI_BROWSER; ?>" target="_blank">
                                    <img src="<?php echo SAFARI_BROWSER_ICON; ?>">Apple Safari
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
	<?php  include 'includes/footer.php';?>
</div>
<!-- keep this before closing body tag --> 
<script><?php include 'common/scripts-compress.php'?></script>
</body>
</html>