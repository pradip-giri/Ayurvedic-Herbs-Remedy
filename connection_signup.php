<?php
session_start();
if(isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','ayurvedic');
    if(!$conn){
        die ("Connection Failed".mysqli_connect_error($conn));
    }

    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $language=$_POST['language'];
    $mobile=$_POST['mobile'];

    $sql="insert into signup(id,firstname,lastname,userid,password,dateofbirth,gender,language,mobile)
    value('','$firstname','$lastname','$userid','$password','$dateofbirth','$gender','$language','$mobile')";

    if (mysqli_query($conn,$sql)){
        echo "Registration Successfull";
    }
    else{
        echo "Not Registration".mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>