<?php
$myfile = fopen("log.txt", "a");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"]. "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent:" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);
?>
