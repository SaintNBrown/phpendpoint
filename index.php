<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students log-in page</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="enter your name" ><br>

    <label for="code">Code:</label>
    <input type="number" name="code" placeholder="enter your code" ><br>

    <label for="gpa">GPA:</label>
    <!-- THIS IS HOW TO ACCEPT DECIMAL NUMBERS ON HTML FORMS-->
    <input type="text" name="gpa" pattern="[0-9]+(\.[0-9]+)?" placeholder="enter gpa" ><br>

    <label for="level">Level:</label>
    <input type="number" name="level" placeholder="enter level"><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php 
DEFINE("DB_USER", "root");
DEFINE("DB_HOST", "localhost");
DEFINE("DB_PASSWORD", "");
DEFINE("DB_NAME", "student");

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$dbc){
  echo "There was a connection problem! ".mysqli_connect_error();
} else {
  echo "Connection successful! <br/>";
}

// $query = "CREATE TABLE undergrad(
//   code INT PRIMARY KEY,
//   stud_name VARCHAR(255),
//   gpa INT NOT NULL,
//   stud_level INT NOT NULL
// )";

// $result = mysqli_query($dbc, $query);

// if($result){
//   echo "Table undergrad created successfully! ";
// } else {
//   echo "There was an error: ".mysqli_error($dbc);
// }

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = $_POST["name"];
  $code = $_POST["code"];
  $gpa = $_POST["gpa"];
  $level = $_POST["level"];

  echo $name." ".$code." ".$gpa." ".$level;

  $name = mysqli_real_escape_string($dbc,$name);
  //$query = "INSERT INTO undergrad (code, stud_name,gpa,stud_level) VALUES ( '$code' ,'$name', '$gpa', '$level')";
  $query = "SELECT * FROM undergrad ORDER BY gpa";

  $result = mysqli_query($dbc, $query);
  if($result){
    "Connection successful, data updated";
  } else {
    "Couldn't update record! ".mysqli_error($dbc);
  }
}
?>