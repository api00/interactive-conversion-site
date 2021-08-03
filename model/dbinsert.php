<?php

require "dbconnect.php";



   function add($inch, $feet, $kg, $g){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO rate_unit (inch, feet, kg, g) VALUES (?, ?, ?, ?)');
    $sql->bind_param('s,s,s,s',$inch, $feet, $kg, $g);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

?>