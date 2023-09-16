<?php

$con=new mysqli('localhost','root','','passport');

if(!$con){
    die(mysqli_error($con));
}   
?>