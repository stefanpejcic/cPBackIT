<?
$fn = "/home/carlos/.cpbackit/cpbackit.conf";
$content = stripslashes($_POST['content']);
$fp = fopen($fn,"w") or die ("Error opening file in write mode!");
fputs($fp,$content);
fclose($fp) or die ("Error closing file!");
echo "<meta http-equiv=\"refresh\" content=\"0; url=conf_bkp.php\" />\n";


?>
