<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
header("Content-Type: text/plain");

exec('sudo chmod -f 777 /Root/Pac/services/data/debug.log');

echo file_get_contents("/Root/Pac/services/data/getinfo");

echo "

";

$debugLog = "/Root/Pac/services/data/debug.log";
echo file_get_contents($debugLog);
?>