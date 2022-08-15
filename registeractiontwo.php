<?php
include("connection.php");

$phone =  $_REQUEST['phone'];

$pan =  $_REQUEST['pan'];

$name =  $_REQUEST['name'];

$email =  $_REQUEST['email'];

$password =  $_REQUEST['password'];

$created_at = date("Y-m-d");


$insert="INSERT into crudtable (phone,pan,name,email,password,created_at) values ('".$phone."','".$pan."','".$name."','".$email."','".$password."','".$created_at."')";

$query = $conn->query($insert);

if($query){

header("location:index.php?message=success");


}else{

header("location:index.php?message=failed");

}

?>