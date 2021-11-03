<?php

session_start();
include("connection.php"); 
 // Table name 
 //-----------------LOG IN CREDENTIALS ------------------------------
$username=$_POST['username']; // username sent from form --> table user
$password=$_POST['password']; // password sent from form --> table user

//-----------------ACTIVITY LOG DATA  for CLIENTS------------------------------
$clientid=$_POST['clientid']; // for clientactlog client id
$activity=$_POST['activity']; // for clientactlog activity
$activity="<p style=color:green;font-weight:bold;>You have Logged In Successfully.</p>"; //value of POST ACTIVITY

//this is for inserting client information
$profile=$_POST['profile'];
$fullname=$_POST['fullname'];
$contact_n=$_POST['contact_n'];
$office=$_POST['office'];
$designation=$_POST['designation'];

//this is for inserting admin information
$prof=$_POST['profile'];
$fname=$_POST['fullname'];
$contact=$_POST['contact_n'];
$off=$_POST['office'];
$desig=$_POST['designation'];
 
 
// clean the strings 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
 
//----------------- FIND USERNAME AND PASSWORD ------------------------------
$sql="SELECT * FROM `user` WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
// mysqli_num_rows is counting table row

//----------------- IF USER EXIST ------------------------------
if(mysqli_num_rows($result) > 0){
$rows = mysqli_fetch_array($result);
$_SESSION['id']=$rows['id']; //GET USER ID
//
$userid=$_SESSION['id'];//FOR ACTIVITY LOG

//----------------- FIND CLIENT ------------------------------

$qry=mysqli_query($conn,"select *from `clients` where user_id=$userid");
while($roww=mysqli_fetch_array($qry))
{
	$clientid=$roww['id']; //GET CLIENT ID FOR ACTIVITY LOG
	
}

//Direct pages with different user levels

if ($rows['userole'] == 'admin'){
	$acheck="SELECT * FROM `admin` WHERE user_id='$userid'";
	$ares=mysqli_query($conn,$acheck);

	if(mysqli_num_rows($ares) > 0) //if user already exists direct to admin dashboard
	{
		header('location:dashboard.html');
	
	
	}
	else{
		//if not insert null data
		mysqli_query($conn,"insert into `admin` (profile,fullname,designation,office,contact_n,user_id) values('$prof','$fname','$desig','$off','$contact','$userid')");
		header('location: admin-prof.php'); 
	}

}
else
if ($rows['userole'] == 'Client') {
	$acheck="SELECT * FROM `clients` WHERE user_id='$userid'";
	$ares=mysqli_query($conn,$acheck);

	if(mysqli_num_rows($ares) > 0) //if client already exists save login info and direct to client dashboard
	{
		mysqli_query($conn,"insert into `userlog` (activity,clientid) values('$activity','$clientid')");
		header('location:cli-dash.php');
	
	
	}
	else{
		//if not insert null data
		mysqli_query($conn,"insert into `clients` (profile,fullname,designation,office,contact_n,updated_at,user_id) values('$profile','$fullname','$contact_n','$department','$designation','$userid')");
		header('location: cli-dash.php'); 
	}


 
} 
else
if ($rows['userlevel'] == 'StoreKeeper') {
	header('location: a-accounts.php'); //user 3 
	session_register("username");
	session_register("password"); 
 
} 

else
{ 
	$_SESSION['message']="User not found!";
	header('location:ulogin.php');
} 
}

?>