<?php
//Connect to the Database
require_once("");

//Choose the POST method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //Check if the username is blank
  if(empty($_POST["username"])){
    //Give an alert and back to the last page
    echo "<script>alert('Username is required!');history.back();</script>";
  } else {
    //Save username as a variable
    $username = $_POST["username"];
  }
  //Check if the password is blank
  if(empty($_POST["password"])){
    //Give an alert and back to the last page
    echo "<script>alert('Password is required!');history.back();</script>";
  } else {
    //Save password as a variable
    $password = md5($_POST["password"]);
  }
  //Check if the confirm password is blank
  if(empty($_POST["pwd_again"])){
    //Give an alert and back to the last page
    echo "<script>alert('Confirm password is required!');history.back();</script>";
  } else {
    //Save the confirm password as a variable
    $pwd_again = $_POST["pwd_again"];
  }
  //Check if the two password entered are the same
  if ($password != $pwd_again){
    //When it is not matched
    echo "<script>alert('Two passwords entered are not the same!');history.back();</script>";
  }
}

//All inputs are OK and do query for check if the username already taken
$query1  = "SELECT username, password FROM users WHERE username = '$username'";

$result1 = $mysqli_query($connection,$query);
//Check the rows in database with the username input before
$num = mysqli_num_rows($result1);
//If the result is matched
if($num){
  echo "<script>alert('Username already exists!');history.back();</script>";
} else {
  //Do query to insert username and password into the database
  $query2 = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

  $result2 = mysqli_query($connection, $query2);
  //Check the result
  if(!$result2){
    echo "<script>alert('Register failed!');history.back();</script>";
  } else {
    echo "<script>alert('Resiter successfully!');parent.location.href='html/login.html';</script>";
    //Free results
    mysqli_free_result($result);
  }
}

//Close the database connection
mysqli_close($connection);

 ?>
