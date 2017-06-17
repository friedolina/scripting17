<?php

function test_input($data) {
     global $db;
     
     $data = trim($data);
     
     $data = stripcslashes($data);
     
     $data = mysqli_real_escape_string($db, $data);
     
     $data = htmlspecialchars($data);
     
     return $data;
 }

 ?>