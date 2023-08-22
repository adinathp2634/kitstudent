<?php
//Get user input frm the form

$name =$_POST['name'];
$date =$_POST['date'];
$email =$_POST['email'];
$number =$_POST['number'];
$address =$_POST['address'];
$password =$_POST['password'];


//connect to  my sql server

$servername = "localhost";
$username = "root";
$password = "";
$database = "userdata";

$conn = new mysqli($servername,$username,$password,$database);


//check connection
if($conn->connect_error){
    die("Connection failed: ".$connect_error);
}

//insert user information into the database

$sql = "INSERT INTO User(name,date,email,number,address,password)VALUES('$name','$date','$email','$number','$address','$password')";

if($conn->query($sql)===TRUE){
    echo "User Registered Succefully.";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}

//Close The Database

$conn->close();
?>