<?php 
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $number = $_POST["number"];

  /* FACTORIAL OF $number using FOR LOOP

  $array = [];
  $counter = 1;
  for($i = 1; $i <= $number; $i++){
    array_push($array, $i);
  }
  for($i= 0; $i < count($array); $i++){
    $counter = $counter * $array[$i];
  }
  echo $counter."<br>";
  $num = array_product($array);
  echo $num;
  */

  /* Using WHILE loop to find the FACTORIAL of $number

  $items = 1;
  $array = [];
  while ($items <= $number){
    array_push($array, $items);
    $items++;
  }

  $i = 0;
  $multiplier = 1;
  while($i < count($array)){
    $multiplier = $multiplier * $array[$i];
    $i++;
  }

  echo $multiplier;
  */

  /* Prints all even numbers between 2 and $number
  for($i = 1; $i <= $number; $i++){
    if($i % 2 === 0){
      echo $i." ";
    }
  }
  */

  /* Checks the parity of a number
  $isEven = ($number % 2 === 0) ? "Number is even!" :  "Number is odd!";
  echo $isEven;
  */

  /* Switch statement

 switch ($day){
  case "Monday":
    echo "You entered Monday.";
    break;

  case "Tuesday":
    echo "You entered Tuesday";
    break;

  case "Wednesday":
    echo "You entered Wednesday";
    break;

  case "Thursday":
    echo "You entered Thursday";
    break;

  case "Friday":
    echo "You entered Friday";
    break;

  case "Saturday":
    echo "You entered Saturday";
    break;

  default:
    echo "You entered Sunday";
  }

  */
  $m = " ";
  for($i = 1; $i <= $number; $i++){
    for($j = $number - $i; $j >= 1; $j--){
      echo '&nbsp ';//this is called no breaking space
    }
    for($k=1; $k <= ($i + 1); $k++){
      if($k > $i){
        for($n = ($i-1); $n > 0; $n--){
          echo $n;
        }
      } else {
        echo $k;
      }
    }
    echo "<br />";
  }

}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <input type="number" name="number"><br>
  <input type="submit" value="Submit">
</form>