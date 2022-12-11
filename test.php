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
if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["group"]) && !empty($_POST["text"]) && !empty($_POST["agree"]) && !empty($_POST["gender"]) && !empty($_POST["courses"])){
  echo "Name". $_POST['name'];
  echo "E-mail". $_POST['mail'];
  echo "Group". $_POST['group'];
  echo "Class details". $_POST['text'];
  echo "Gender". $_POST['gender'];
  echo "Your courses". $_POST['courses'];
}
//
$nameErr = $mailErr = $genderErr = $agreeErr = $textErr = $coursesErr = $groupErr = "";
$name = $mail = $agree = $gender = $text = $courses = $group = "";
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
    $agreeErr = "";
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
//
//part two
$students = array(
  array(
    'name' => 'Alaa',
    'email' => 'ahmed@test.com', 
    'status' => 'Science',
  ),
  array(
    'name' => 'Shamy', 
    'email' => 'ali@test.com', 
    'status' => 'AAST',
  ),
  array(
    'name' => 'Youssef', 
    'email' => 'basem@test.com', 
    'status' => 'AAST',
  ),
  array(
    'name' => 'Waleid', 
    'email' => 'farouk@test.com', 
    'status' => 'Science',
  ),
  array(
    'name' => 'Rahma', 
    'email' => 'hany@test.com', 
    'status' => 'AAST',
  )
);
// print_r($students);
// $no = 0;
// foreach($students as $s){
// }
// $no = $no + 1;
?>
<html>
    <head>
    <style>
     .error {color: #FF0000;}
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
    <label for="" name="gender">Gender</label>
    <input type="radio" name="male">
    <label for="">Male</label>
    <input type="radio" name="female">
    <label for="">Female</label>
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <label for="" name="courses">Select courses</label>
    <select>
      <option value="php">PHP</option>
      <option value="js">Java Script</option>
      <option value="mysql">MySQL</option>
      <option value="html">HTML</option>
    </select>
    <br><br>
    Agree <input type="checkbox" name="agree">
    <span class="error">* <?php echo $agreeErr;?></span>
    <br><br>
    <input type="Submit">
    </form>
    <table>
      <tr>
        <td>name</td>
        <td>email</td>
        <td>status</td>
      </tr>
      <!-- <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $s['name'];?></td>
        <td><?php echo $s['email'];?></td>
        <td><?php echo $s['status'];?></td>
      </tr> -->
      <tr>
        <td style="color:red;"><?php echo $students[0]['name'];?></td>
        <td style="color:red;"><?php echo $students[0]['email'];?></td>
        <td style="color:red;"><?php echo $students[0]['status'];?></td>
      </tr>
      <tr>
        <td><?php echo $students[1]['name'];?></td>
        <td><?php echo $students[1]['email'];?></td>
        <td><?php echo $students[1]['status'];?></td>
      </tr>
      <tr>
        <td><?php echo $students[2]['name'];?></td>
        <td><?php echo $students[2]['email'];?></td>
        <td><?php echo $students[2]['status'];?></td>
      </tr>
      <tr>
        <td style="color:red;"><?php echo $students[3]['name'];?></td>
        <td style="color:red;"><?php echo $students[3]['email'];?></td>
        <td style="color:red;"><?php echo $students[3]['status'];?></td>
      </tr>
      <tr>
        <td><?php echo $students[4]['name'];?></td>
        <td><?php echo $students[4]['email'];?></td>
        <td><?php echo $students[4]['status'];?></td>
      </tr>
    </table>
    </body>
</html>
