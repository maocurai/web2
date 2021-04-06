<?php 

function fixParam($value = "") 
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

function isDate($format, $date)
{
	return DateTime::createFromFormat($format, fixParam($date));
}

$country = $_POST['country'];
$date =  $_POST['date'];
$duration =  $_POST['duration'];
if(!empty($country) && !empty($date) && !empty($duration)) {
	$country = fixParam($country);
	echo "Country: {$country} <br/>";
	echo (isDate('Y-m-d', fixParam($date))) ? "Date: {$date}  <br/>" : "Date: {$date} is not correct <br/>";
	echo (fixParam($duration) > 0) ? "Duration: {$duration} <br/>" : "Duration: {$duration} is not correct.<br/>";
} else {
	echo "Empty params entered!";
}
?>