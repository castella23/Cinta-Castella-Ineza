<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $fullname= $_POST['fullname'];
    $phone_number= $_POST['mobile'];
    $email= $_POST['email'];
    $password=sha1($_POST['password']);
    $gender= $_POST['gender'];
    $sql="INSERT INTO crud(fullname,email,password,gender,phone_number) VALUES('$fullname','$email','$password','$gender','$phone_number')";

    $result = $con->query($sql);
    if($result ==true){
        //echo "Record created sucessfully";
        header('location:display.php');
    }else{
        echo 'Error:'.$sql.'<br>' .$conn->error;
    };
    $con->close();
}
?>