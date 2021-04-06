<?php 

function fixParam($value = "") 
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

$name = $_POST['name'];
$email =  $_POST['email'];
if(!empty($name) && !empty($email)) {
	$name = fixParam($name);
	$email = fixParam($email);
	echo "Name: {$name} <br/>";
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   		echo "Email: {$email}  <br/>";
	}else{
   		echo "Email {$email} is not correct.";
	}
} else {
	echo "Empty params entered!";
}
?>
