<?php
$file_path = 'core/views/cache.html';

if(file_exists($file_path)) {
	$file_name = basename($file_path);
	$file_size = filesize($file_path);

    // Output headers.
    header("Cache-Control: private");
    header("Content-Type: application/stream");
    header("Content-Length: ".$file_size);
    header("Content-Disposition: attachment; filename=".$file_name);

	// Output file.
    readfile ($file_path);                   
    exit();
}
require_once $file_path;
?>