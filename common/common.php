<?php
	/**
	 * For maintaining common settings and includes
    */
	
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	// JS min library file
	require_once 'JSMin.php';

	// Include functions
	require_once 'functions.php';
	
    // current directory path
	$rootPath = $currentDirectory = $_SERVER['DOCUMENT_ROOT']."/";
	$currentYear = date('Y');
	
	// Developer Mode
	$developerMode = "off";
	if(isset($_GET['ydevmode']) && $_GET['ydevmode'] == 'on'){
		$developerMode = $_GET['ydevmode'];
		$currentDirectory = "/";
	}

    // Includes path
    DEFINE('COMMON_PATH', $currentDirectory."common/");
 
    // CMS Form js file
    DEFINE('CMS_FORM_JS', "https://forms.yourpractice.online/js/ypo-cms-forms-functions-min.js");
	
	// Assets Domain URL
	DEFINE('ASSETS_URL', 'https://assets.yourpractice.online/');

    // Scripts path
    //DEFINE('SCRIPTS_PATH', ASSETS_URL."scripts/");
	DEFINE('SCRIPTS_PATH', COMMON_PATH.'js/');
	
	// Lazy sizes file path
	DEFINE('LAZY_SIZES_FILE', '/common/js/lazysizes-min.js');
	
	// Loading icon
	DEFINE('LOADER_SMALL', '/loading/');
	DEFINE('LOADER_IMG', ASSETS_URL.'1937/loader-small.gif');
	
	// Accessibility Statement URL
	DEFINE('ACCESSIBILITY_STATEMENT_URL', 'https://common.yourpractice.online/ada/website-accessibility-statement.php');

	// Browsers download links and icons
	DEFINE ('IE_BROWSER', 'https://www.microsoft.com/en-in/download/internet-explorer.aspx');	
	DEFINE ('IE_BROWSER_ICON', ASSETS_URL.'1937/internet-explorer.png');	
	DEFINE ('CHROME_BROWSER', 'https://www.google.com/intl/en_in/chrome/');	
	DEFINE ('CHROME_BROWSER_ICON', ASSETS_URL.'1937/google-chrome.png');	
	DEFINE ('FIREFOX_BROWSER', 'https://www.mozilla.org/en-US/firefox/new/');	
	DEFINE ('FIREFOX_BROWSER_ICON', ASSETS_URL.'1937/firefox.png');	
	DEFINE ('SAFARI_BROWSER', 'https://support.apple.com/downloads/safari');	
	DEFINE ('SAFARI_BROWSER_ICON', ASSETS_URL.'1937/safari.png');	

	// Common Setting file
	include $rootPath.'configs/settings.php';

    // Images path constant
	$localhostIps = array('127.0.0.1', '::1');
	if(!in_array($_SERVER['REMOTE_ADDR'], $localhostIps)){
		if(empty(trim($cmsWebsiteId))){
			echo "<div style='background:#7b1b1b;color:#fff;text-align:center;padding:10px 0;border-radius:5px;'>Please enter CMS Website ID in configs/settings file.</div>"; exit;
		}
		$cmsWebsiteId = trim($cmsWebsiteId);
		DEFINE('IMG_PATH', ASSETS_URL."$cmsWebsiteId/");
		DEFINE('THREE_D_IMG_PATH', ASSETS_URL."$cmsWebsiteId/$threeDImagesFolderName/");
	}else{
		$imagesFolderName = trim($imagesFolderName);
		$imagesFolderName = trim($imagesFolderName, '/');
		DEFINE('IMG_PATH', "/$imagesFolderName/");
		DEFINE('THREE_D_IMG_PATH', "/$threeDImagesFolderName/");
	}
?>
