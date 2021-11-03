<?php
	require_once 'connection.php';
	
	if(isset($_POST['submit']))
    {
		$id = $_POST['id'];
		$uname = $_POST['username'];
		$pass = $_POST['password'];
        $password = $_POST['password'];
		$role = $_POST['role'];


        $check_q = mysqli_query($conn, "SELECT *FROM `user` WHERE id='$id' and password='$pass'");
        $check = mysqli_num_rows($check_q);
		
        if($check>0)
    {   
        //IF PASSWORD EXIST ACCEPT CHANGES
        mysqli_query($conn, "UPDATE `user` SET `username` = '$uname', `password` = `$password`, `userole` = '$role' WHERE `id` = '$id'") or die(mysqli_error());
        header("Location: accounts.php");
    }
    else
    {
		header("location: accounts.php");
    }
}
?>
