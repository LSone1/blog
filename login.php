<?php
//Connect to the database
require_once("");

if(isset($_POST["submit"])){
  if(empty($_POST["username"]) || empty($_POST["password"])){
    $error = "Username or password is empty.";
  } else {
//Save username and password as variables
$username = $_POST["username"];
$password = $_POST["password"];
$uid = $_POST["id"];

//Do query
$query  = "SELECT username, password FROM users WHERE username = '$username' &&  password = '$password'";

$result = mysqli_query($connection, $query);

if(!$result){
  die("query is wrong");
}

//Check how many rows are selected
$numrows = mysqli_num_rows($result);
if($numrows == 1){
  //Start to use session
  session_start();

  //Create session variable
  $_SESSION["login_user"] = $uid;
  header("Location:index.php");
} else {
  echo "<script>alert('Login failed');</script>";
}

//Free results
mysqli_free_result($result);

  }
}

//Close the database connection
mysqli_close($connection);

 ?>

<?php
if(isset($error)){
  echo "<span>" . $error . "</span>";
}

 ?>
