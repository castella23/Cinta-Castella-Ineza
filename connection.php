<?php
$con=new mysqli('localhost','root','','crude_operations');
if($con){
    // echo "connection successfull <br>";
}else{
    die(mysqli_error($con));
}
?>