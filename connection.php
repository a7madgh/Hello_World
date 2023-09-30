<?php

   
   $connection = mysqli_connect('localhost',"ahmad", "ahmad1234", "test");

    if (!$connection){

        die("connection error assssssssssssssssssssssssssssssss" .mysqli_connect_error()) ;
    }
    else
        echo "connection successfuly";
?>

