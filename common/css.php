<?php
/**
 * For maintaining css
*/
ob_start("compress");
function compress($buffer) {
	global $imagesFolderName, $cmsWebsiteId, $threeDImagesFolderName, $localhostIps;
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	if(!in_array($_SERVER['REMOTE_ADDR'], $localhostIps)){
		$local_paths = array("/$imagesFolderName/", "/$threeDImagesFolderName/");
		$assets_paths = array(ASSETS_URL."$cmsWebsiteId/", ASSETS_URL."$cmsWebsiteId/$threeDImagesFolderName/");
		$buffer = str_replace($local_paths, $assets_paths, $buffer);
	}
	return $buffer;
}

// Adding individual page css files
if(isset($pageRelatedCssFiles) && !empty($pageRelatedCssFiles)){
	$css_files = array_merge($css_files, $pageRelatedCssFiles);
}
if($developerMode == 'off'){
	echo "<style>";
}
for($i=0; $i<count($css_files); $i++){
	if($developerMode == 'on'){
		echo '<link href="'.CSS_PATH.$css_files[$i].'" rel="stylesheet">';
	}else{
		include(CSS_PATH.$css_files[$i]);
	}
}
if($developerMode == 'off'){
	echo "</style>";
}
ob_end_flush();
?>