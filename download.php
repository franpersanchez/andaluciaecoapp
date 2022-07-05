<?php
header('Content-Description: File Transfer');   
header('Content-Disposition: attachment; filename='.basename($_GET['file']));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($_GET['file']));
header("Content-Type: text/plain");
readfile($_GET['file']);

exit;