<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gtregistration";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if(!empty($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from register where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo"<script> alert('Login Successfull..Welcome User..');window.location='html5.html'</script>";
    }
    else{
        echo"<script> alert('Login Failed..Check your Login Credentials and retry');window.location='login.html'</script>";
    }
}