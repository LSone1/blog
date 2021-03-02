<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <style>
input[type=text], input[type=number], select {
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
    <form action="switch-calculator.php" method="post">
      <input type="number" name="num1" placeholder="number1">
      <input type="number" name="num2" placeholder="number2">
      <select name="op">
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>

    <p>The answer is: </p>
    <?php
    if (isset($_POST["submit"])) {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      switch ($op) {
        // +
        case "Add":
        echo $num1 + $num2;
        break;
        // -
        case "Subtract":
        echo $num1 - $num2;
        break;
        // *
        case "Multiply":
        echo $num1 * $num2;
        break;
        // /
        case "Divide":
        echo $num1 / $num2;
        break;
        //others
        default:
        echo "Invalid Operation";
        break;
      }
    }
     ?>

  </body>
</html>
