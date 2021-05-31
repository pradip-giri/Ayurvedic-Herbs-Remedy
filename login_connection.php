<style>
    body{
        background-color:seagreen;
    }
    div{
        width:400px;
        height:130px;
        background-color:lightblue;
        margin-left:35%;
        margin-top:10%;
        font-size:35px;
        text-align:center;
    }
</style>
<?php
session_start();

$userid=$_POST['userid'];
$password=$_POST['password'];
    //connection Database
$conn=mysqli_connect("localhost","root","","ayurvedic");
if(!$conn)
{
    die("connected failed".mysqli_connect_error());
}

    //It is for login username and password.
$Email_check="select * from signup where userid = '$userid' && password='$password'";
$result=mysqli_query($conn,$Email_check);
$num=mysqli_num_rows($result);

if($num==1)
{
    header('location:index.php');
}
else if($num==0)
{
    echo "<div>You are not Resister<br><a href='Register.php'>please Signup</a></div>";
}
else
{
    header('location:Login.php');
}
?>