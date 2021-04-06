<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<?php
	$page = fixParam($_GET['page']);
	switch ($page) {
		case 'mainContent':
			break;
		case 'firstContainerContent':
			echo "<link rel='stylesheet' href='css/style3.css'>";
			break;
		case 'secondContainerContent':
			echo "<link rel='stylesheet' href='css/style1.css'>";
			break;
		case 'infoPageContent':
			echo "<link rel='stylesheet' href='css/style1.css'>";
			echo "<link rel='stylesheet' href='css/style2.css'>";
			break;
	}
	?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<title>Top Travel</title>
</head>

<?php
function fixParam($value = "") 
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

$page = fixParam($_GET['page']);
require "header.php";
require "pages/{$page}.php";
require "footer.php";

?>
</html>