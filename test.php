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
//////////////////////////////////////////////////////////////////
//Day 2
// echo nl2br("say \n hello");
// echo"<br>";
//
// $str = addcslashes("Hello World!","W");
// echo($str);
// $str = bin2hex("Hello World!");
// echo($str);
// $str = Hello World World!";
// echo $str . "<br>";
// echo chop($str,"World!");
//
// echo"<pre>";
// print_r($_SERVER);
// echo"</pre>";
// $numbers = [12, 45, 10, 25];
// echo $numbers[0];
// echo"<br>";
// echo $numbers[1];
// echo"<br>";
// echo $numbers[2];
// echo"<br>";
// echo $numbers[3];
// echo"<br>";
//
// echo array_sum($numbers);
// echo"<br>";
//
// rsort($numbers);
// $arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++)
// {
//   echo $numbers[$x];
//   echo"<br>";
// }
//
// $average = array_sum($numbers) / count($numbers);
// echo $average;
//
// $names = array ("sara" => 31, "john" => 41, "walaa" => 39, "ramy" => 40);
// echo "<pre>";
// asort ($names, SORT_REGULAR);
// echo "</pre>";
// print_r ($names);
// echo"<br>";
//
// echo "<pre>";
// arsort ($names, SORT_REGULAR);
// echo "</pre>";
// print_r ($names);
// echo"<br>";
//
// echo "<pre>";
// ksort ($names, SORT_REGULAR);
// echo "</pre>";
// print_r ($names);
// echo"<br>";
//
// echo "<pre>";
// krsort ($names, SORT_REGULAR);
// echo "</pre>";
// print_r ($names);
// echo"<br>";
/////////////////////////////////////////////////////////////////////
//Day 3
//part one
// if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["group"]) && !empty($_POST["text"]) && !empty($_POST["agree"]) && !empty($_POST["gender"]) && !empty($_POST["courses"])){
//   echo "Name". $_POST['name'];
//   echo "E-mail". $_POST['mail'];
//   echo "Group". $_POST['group'];
//   echo "Class details". $_POST['text'];
//   echo "Gender". $_POST['gender'];
//   echo "Your courses". $_POST['courses'];
// }
//
$name = $mail = $agree = $gender = $text = $courses = $group = "";
$nameErr = $mailErr = $agreeErr = $genderErr = $textErr = $coursesErr = $groupErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['name'])){
    $nameErr = "Name is required";
  }else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["mail"])) {
    $mailErr = "Email is required";
  } else {
    $mail = test_input($_POST["mail"]);
  }
  if (empty($_POST["agree"])) {
    $agreeErr = "Agree is required";
  } else {
    $agree = test_input($_POST["agree"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["text"])) {
    $text = "";
  } else {
    $text = test_input($_POST["text"]);
  }
  if (empty($_POST["group"])) {
    $groupErr = "";
  } else {
    $group = test_input($_POST["group"]);
  }
  if (empty($_POST["courses"])) {
    $coursesErr = "";
  } else {
    $courses = test_input($_POST["courses"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "<h2>Your given values are as:</h2>";
echo "Name:".$name;
echo "<br>";
echo "E-mail:".$mail;
echo "<br>";
echo "Group #:".$group;
echo "<br>";
echo "Class details:".$text;
echo "<br>";
echo "Gender:".$gender;
echo "<br>";
echo "Your courses:".$courses;
echo "<br>";
?>
<html>
    <head>
    <style>
     .error {color: #FF0000;}
     form {width: 200px;}
    </style>
    </head>
    <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="">Name</label>
    <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    <label for="">E-mail</label>
    <input type="email" name="mail">
    <span class="error">* <?php echo $mailErr;?></span>
    <br><br>
    <label for="">Group #</label>
    <input type="text" name="group">
    <br><br>
    <label for="">Class details</label>
    <textarea name="text" id="" rows="5"></textarea>
    <br><br>
    Gender
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <!-- <label for="" name="courses">Select courses</label> -->
    <!-- <select multiple>
      <option value="php">PHP</option>
      <option value="js">Java Script</option>
      <option value="mysql">MySQL</option>
      <option value="html">HTML</option>
    </select> -->
    Select courses<br>
    <input type="checkbox" name="courses">PHP<br>
    <input type="checkbox" name="courses">Java Script<br>
    <input type="checkbox" name="courses">MySQL<br>
    <input type="checkbox" name="courses">HTML
    <br><br>
    Agree <input type="checkbox" name="agree">
    <span class="error">* <?php echo $agreeErr;?></span>
    <br><br>
    <input type="Submit">
    </form>
</html>
<?php
$students = [
  ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
  ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
  ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
  ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
  ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];
echo " <h1>Application name</h1>";
echo "<table>";
echo "<th>Name</th>" , "<th>Email</th>" , "<th>status</th>";
foreach($students as $var){
  if($var['status']=='Science'){
      echo "<tr style = 'color:red;'>";
   }else{
       echo "<tr>";
   }
  echo "<td>".$var['name'] . "<br>" . "</td>";
  echo "<td>".$var['email'] . "<br>" . "</td>";
  echo "<td>".$var['status'] . "<br>" . "</td>";
  echo "</tr>";
}
echo"</table>";
?>
