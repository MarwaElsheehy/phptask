<?php
// phpinfo();
const website = "http://localhost/phptask/test.php";
echo website ."<br>";
// echo"<pre>";
// print_r($_SERVER);
// echo"</pre>";
// echo$_SERVER['SERVER_PORT'];
// echo$_SERVER['SERVER_NAME'];
// echo$_SERVER['SERVER_ADDR'];
// echo$_SERVER['SCRIPT_FILENAME'];
// echo$_SERVER['PATH'];
$age = 10;
switch($age){
    case $age < 5:
    echo"stay at home";
    break;
    case '5':
    echo"go to kindergarden";
    break;
    case $age = 6-12:
    echo"go to grade";
    break;
    default:
    echo"other";
}
?>