<?php
	/**
	 * For maintaining settings
    */

	// Common Variables
	$cmsWebsiteId = "2014"; // CMS website ID
	$imagesFolderName = "images"; // Local images folder name
	$threeDImagesFolderName = "3d-images"; // 3D images folder name
	$copyRightText = "Dr. Johar’s Plastic Surgery Group"; // Copy right text goes here
	$googleCaptchaAPIKey = "google-captcha-site-key"; // Goolge Captcha Site key goes here
	$breadCrumbHomeTitle = "Dr. Manoj K Johar, Plastic and Reconstructive Surgeon"; // Breadcrumb Home link title
	$breadCrumbSeparator = "/"; // Breadcrumb Separator
	// Common Variables ends
	
	// JS CONFIG VARIABLES STARTS
	// YPO Education Client ID
	$multiMedia =  '';
	
	// Bottom/Top Scroller
	$scroller = 'true'; // Avaliable options are true/false
	
	// Adjust main menu width automatically
	$menuWidth = 'false'; // Avaliable options are true/false
	
	// Enable mobile menu
	$mobileMenu = 'true'; // Avaliable options are true/false
	$slideMenu = 'false'; // Avaliable options are true/false
	$slideType = ''; // Slide type, Avaliable options are left/right
	$mobileMenuStartsFrom = '640'; // Mention the width from where mobile menu starts, ex: 480
	
	// Generate sitemap from main menu
	$siteMap = 'true'; // Avaliable options are true/false
	$siteMapUrl = '/sitemap/'; // Enter sitemap url to generate Sitemap ex: '/sitemap_url/'
	
	// Show country codes before phone numbers
	$showCountryCode = 'false'; // Avaliable options are true/false
	$countryCode = '["+91"]'; // Phone numbers country codes,  Enter each value in double quotes separated by comma
	
	// Website Phone Numbers
	$phoneNumbers = '["+91 85277 78462","+91 88604 44888"]'; // Enter each value in double quotes separated by comma
	$phoneInfos  = '["Telephone Number of Dr. Manoj Johar, Plastic & Reconstructive Surgeon, Noida, UP"]'; // Enter each value in double quotes separated by comma
	$phoneLinks = '["/general-appointment-plastic-reconstructive-surgeon-noida-up/"]'; // Enter each value in double quotes separated by comma
	
	// Website Fax numbers
	$faxNumbers = '["(xxx) xxx-xxxx"]'; // Enter each value in double quotes separated by comma
	$faxInfos = '["Fax Number of XXXXXX"]'; // Enter each value in double quotes separated by comma
	
	// Banners Responsive height
	$responseHeight = 'false'; // Avaliable options are true/false
	$responseHeight_upto = '480';
	$responseList = '["#Banner"]'; // Enter each value in double quotes separated by comma
	
	// Swap Banners
	$swapBanner = 'false'; // Avaliable options are true/false
	$swapBanner_after = '480';
	
	// Accordions
	$accordion = 'true'; // Avaliable options are true/false
	$tabAccord = 'true'; // Avaliable options are true/false
	$tabAccord_upto = '640';
	
	// Sticky Header
	$stickyHeader = 'false'; // Avaliable options are true/false
	$stickyHieght = '120';
	
	// Parallax settings
	$onView = 'false'; // Avaliable options are true/false
	$onViewList = "('')"; // Enter multiple values with in single quotes separated by comma
	$parallaxEffect = 'false'; // Avaliable options are true/false
	$parallaxList = "('')"; // Enter multiple values with in single quotes separated by comma
	
	// GDPR
	$gdpr = 'false'; // Avaliable options are true/false
	
	// Accessibliity
	$accessibility = 'false'; // Avaliable options are true/false
	$fontResize = 'false'; // Avaliable options are true/false
	$fontResizeList = "('')"; // Enter multiple values with in single quotes separated by comma
	$removeElements = "('')"; // Enter multiple values with in single quotes separated by comma
	$removeId = "('')"; // Enter multiple values with in single quotes separated by comma
	$removeClass = "('')"; // Enter multiple values with in single quotes separated by space
	// JS CONFIG VARIABLES ENDS
	
	// JS files path constant
    DEFINE('JS_PATH', $currentDirectory."js/");
	
	// Jquery library file path
    DEFINE('JQUERY_LIBRARY_FILE', JS_PATH."jquery-3.6.0.min.js");
	
	// CSS files path constant
    DEFINE('CSS_PATH', $currentDirectory."css/");

	// Include CSS file names
	//$css_files = array("ypo-style.css", "style.css");
	$css_files = array("common.css");
	
	// Include common js files which require in head tag for all pages except Jquery Library file
	$headJsFiles = array(
        SCRIPTS_PATH."ie-validate.js", // Default files, don't do delete or update 
        SCRIPTS_PATH."ypo-functions.js", // Default files, don't do delete or update 
        //JS_PATH."filename.js", // Example to include Js file in head tag in all pages 
	);      	
	
	// Include common js files which require for all pages except Jquery Library file
	$commonJsFiles = array(
        //JS_PATH."jsfilename.js", // Example to include Js file in all pages 
        SCRIPTS_PATH."common-functions.js", // Default files, don't do delete or update
        SCRIPTS_PATH."jquery-lazy-min.js", // Default files, don't do delete or update
        SCRIPTS_PATH."jquery-lazy-plugins-min.js", // Default files, don't do delete or update
        SCRIPTS_PATH."html5.js", // Default files, don't do delete or update
	);      	
?>