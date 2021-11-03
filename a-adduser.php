<?php
include('connection.php');
if(isset($_POST['username']))
    {
        include("connection.php");
        session_start();

        $username=$_POST['username'];
        $password=$_POST['password'];
        $userole=$_POST['userole'];
      

    $check_q = mysqli_query($conn, "select *from `user` where username='$username'");
    $check = mysqli_num_rows($check_q);

    if($check>0)
    {   
        //NOT SAVED IF ALREADY EXIST
        $_SESSION['status']="user already exist.";
        $_SESSION['status_code'] = "error";
        header("Location: accounts.php");
    }
    else
    {

        //SAVED ITEM NAME
        mysqli_query($conn, "insert into `user` (username,password,userole) values ('$username','$password','$userole')");
        

        $_SESSION['status']="New User Created.";
        $_SESSION['status_code'] = "success";
        header("Location: accounts.php");
    }

    }


?>