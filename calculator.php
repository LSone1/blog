<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <title>Home</title>
</head>

<style>
input[type=number], input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>

<div>
  <form action="calculator.php" method="post">

    <lable for="num1">First Number</lable>
    <input type="number" name="num1">

    <lable for="num2">Second Number</lable>
    <input type="number" name="num2">

    <lable for="op">OP</lable>
    <input type="text" name="op">

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

<?php

if (isset($_POST["submit"])) {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["op"];

if ($op == "+") {
  echo $num1 + $num2;
} elseif ($op == "-") {
  echo $num1 - $num2;
} elseif ($op == "/") {
  echo $num1 / $num2;
} elseif ($op == "*") {
  echo $num1 * $num2;
} else {
  echo "Invalid Oprator";
}

}
 ?>

</body>
