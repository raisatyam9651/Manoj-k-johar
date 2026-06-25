<?php
	/**
	 * For maintaining Javascripts
    */

	// Lazyloading library file path
	echo "<script>var lazysizesFile = '".LAZY_SIZES_FILE."';</script>";
	
	// Adding individual page js files
	if(isset($pageRelatedJsFiles) && !empty($pageRelatedJsFiles)){
		$commonJsFiles = array_merge($pageRelatedJsFiles, $commonJsFiles);
	}
	
	// CMS Form configs
	$cmsFormConfigs = '';
	if(isset($pageHasCMSForm) && $pageHasCMSForm == 'true'){
		array_push($commonJsFiles, CMS_FORM_JS);
		if(empty($googleCaptchaAPIKey) || ($googleCaptchaAPIKey == 'google-captcha-site-key')){
			$cmsFormConfigs = "alert('Please enter \'googleCaptchaAPIKey\' in configs/settings file');"; 
		}else{
			$cmsFormConfigs = "$(document).ready(function(e) {
				$('body').YPOCMSFormsPlugin({
					websiteDateFormat: 'd-M-Y',
					websiteTimeFormat: 'h:i A',
					googleCaptchaSiteKey: '$googleCaptchaAPIKey'
				});
			});";
		}
		$cmsFormConfigs = trim(preg_replace('/\s\s+/', ' ', $cmsFormConfigs));
	}
	if(isset($cmsFormConfigs) && $cmsFormConfigs != ''){
		echo "<script>$cmsFormConfigs</script>";
	}
	echo compressJs('commonJsFiles', $developerMode);
?>