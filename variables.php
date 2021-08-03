<?php 

include "model/dbinsert.php";
 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     

    $flag = false;
    $convert = $inch =  $feet = $kg = $g = "";
    $convertEr = $inchEr = $feetEr = $kgEr = $gEr = "";

 if (empty($_POST["convert"])) {
    $convertEr = "convert value is required";
      $flag = true;
    
  
  }
 if (empty($_POST["inch"])) {
    $inchEr = "inch is required";
      $flag = true;
    
  
  }
 if (empty($_POST["feet"])) {
    $feetEr = "feet value is required";
      $flag = true;
    
  
  }
 if (empty($_POST["kg"])) {
    $kgEr = "kg value is required";
      $flag = true;
    
  
  }
 if (empty($_POST["g"])) {
    $gEr = "G value is required";
      $flag = true;
    
  
  }
  if(!$flag){
    $convert = $_POST["convert"];
    $inch = $_POST["inch"];
    $feet = $_POST["feet"];
    $kg = $_POST["kg"];
    $g = $_POST["g"];
  
    add($inch,$feet,$kg,$g);
  

  }
}

?>