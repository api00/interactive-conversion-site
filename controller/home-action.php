<?php 

$valueEr= "";
$flag= false;
if ($_SERVER["REQUEST_METHOD"] == "GET") {

if (empty($_POST["value"])) {

    $valueEr = "value is required";
    $flag = true;
  }
if (empty($_POST["convert"])) {

    $convertEr = "convert rate is required";
    $flag = true;
  }
  if (!$flag) {
 
    $value =  input($_POST["value"]);
    $convert =  input($_POST["convert"]);
  }

}
  function input($v)
  {
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
  }
 


?>