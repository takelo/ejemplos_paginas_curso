<?php
    $conn = new mysqli('localhost', 'root','','irrhconference');
    if($conn->connect_error) {
      echo $error = $conn->connect_error;
    }
?>                                                                                                                        
