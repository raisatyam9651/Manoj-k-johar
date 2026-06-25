<?php

	/**
	 * Function to get minified content of js files
	*/
	function compressJs($array_name, $is_dev_mode) {
		$jsFiles = $GLOBALS[$array_name];
		$buffer = "";
		if($is_dev_mode == 'on'){
			foreach($jsFiles as $file) {
				$buffer .= "<script src='$file'></script>";	
			}
		}else{
			foreach($jsFiles as $file) {
				$buffer .= fileGetContents($file);
			}
			if(isset($buffer) && $buffer != ''){
				$buffer = "<script>".JSMin::minify($buffer)."</script>";
			}
		}
		if(isset($buffer) && $buffer != ''){
			return $buffer;
		} else {
			return 1;
		}
	}

	/**
	 * Function to get file content
	*/
	function fileGetContents($file){
		return file_get_contents($file);
	}

?>