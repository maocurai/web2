<?php
include 'class.php';

//приведення типів

$var = "12";  //строка
$var += 2;    //int
echo $var;
$var *= "2 str";   //число 2
echo "$var <br/>";
$var *= "3.14";
echo "$var <br/><br/>";  //float

//порівняння

$a = 1;
$b = "1";
$c = 1.0;
$d = 5;
echo ($a == $b)."<br/>"; //1
echo ($a == $c)."<br/>";  //1
echo (int)($a != $b)."<br/>";  //0
echo (int)($a === $b)."<br/>"; //0
echo (int)($a === $c)."<br/>"; //0
echo (int)($a !== $b)."<br/>"; //1
echo (int)($a <> $b)."<br/>";  //0
echo (int)($b <> $d)."<br/>";  //1
echo (int)($a > $b)."<br/>";   //0
echo (int)($a >= $b)."<br/>";  //1
echo (int)($a <=> $b)."<br/>"; //0
echo (int)($b <=> $d)."<br/>"; //-1
echo (int)($d <=> $b)."<br/><br/>"; //1

//explode/implode

$dataString = "data1, data2, data3, data4";
echo "Start string: {$dataString}<br/>";
$data = explode (", ", $dataString);
echo "Array: ";
foreach ($data as $dataIteam) { 
	echo $dataIteam." ";
}
echo "<br/>";
$dataString = implode ("*", $data);
echo "String from array: {$dataString}<br/><br/>";

//ООП та хеш-масив

$objUser = new User('user4', 'password4', "user's 4 info");
echo $objUser->toString();
$objUser->userMethod();

$objRootUser = new RootUser('rootUser', 'rootUserPass', "root user info", "rootUserAttribute");
$objRootUser->userMethod();
$objRootUser->rootUserMethod();

//Singleton

$autorisedUsers = array(
	'password1' => new User('user1', 'password1', 'user 1 info'),
	'password2' => new User('user2', 'password2', 'user 2 info'),
	'password3' => new User('user3', 'password3', 'user 3 info')
);

$singletonObject = Autorisation::getInstance(); 	
$singletonObject1 = Autorisation::getInstance(); 
$singletonObject->addData($autorisedUsers);
$singletonObject->addUser($objUser);
echo $singletonObject1->getUser($objUser->getPassword());
echo $singletonObject1->getUser('password2');
?>