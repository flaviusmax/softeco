<?php 
//$email = "name usersisp.comwefw3f234... 66";
$email = "name@usersisp.com";
if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.]?[a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$email)) {
echo "Your email is in the acceptable format";
} else {
echo "Your email address does not have an acceptable format";
}

?>