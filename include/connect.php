<?php

    $con = mysqli_connect("localhost","root","","doa");
    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
?>