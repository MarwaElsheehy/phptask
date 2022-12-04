<?php
// phpinfo();
// const website = "http://localhost/phptask/test.php";
// echo website ."<br>";
// echo"<pre>";
// print_r($_SERVER);
// echo"</pre>";
// echo$_SERVER['SERVER_PORT'];
// echo$_SERVER['SERVER_NAME'];
// echo$_SERVER['SERVER_ADDR'];
// echo$_SERVER['SCRIPT_FILENAME'];
// echo$_SERVER['PATH'];
// $age = 10;
// switch($age){
//     case $age < 5:
//     echo"stay at home";
//     break;
//     case '5':
//     echo"go to kindergarden";
//     break;
//     case $age = 6-12:
//     echo"go to grade";
//     break;
//     default:
//     echo"other";
// }
//Day 2
echo nl2br("say \n hello");
echo"<br>";
//
// $str = addcslashes("Hello World!","W");
// echo($str);
// $str = bin2hex("Hello World!");
// echo($str);
// $str = "Hello World World!";
// echo $str . "<br>";
// echo chop($str,"World!");
//
// echo"<pre>";
// print_r($_SERVER);
// echo"</pre>";
$numbers = [12, 45, 10, 25];
echo $numbers[0];
echo"<br>";
echo $numbers[1];
echo"<br>";
echo $numbers[2];
echo"<br>";
echo $numbers[3];
echo"<br>";
//
echo array_sum($numbers);
echo"<br>";
//
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++)
{
  echo $numbers[$x];
  echo"<br>";
}
//
$average = array_sum($numbers) / count($numbers);
echo $average;
//
$names = array ("sara" => 31, "john" => 41, "walaa" => 39, "ramy" => 40);
echo "<pre>";
asort ($names, SORT_REGULAR);
echo "</pre>";
print_r ($names);
echo"<br>";
//
echo "<pre>";
arsort ($names, SORT_REGULAR);
echo "</pre>";
print_r ($names);
echo"<br>";
//
echo "<pre>";
ksort ($names, SORT_REGULAR);
echo "</pre>";
print_r ($names);
echo"<br>";
//
echo "<pre>";
krsort ($names, SORT_REGULAR);
echo "</pre>";
print_r ($names);
echo"<br>";
?>