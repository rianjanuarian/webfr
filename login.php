<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','sipelita');

 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values
 $username = $_POST['email_pelanggan'];
 $password = $_POST['password_pelanggan'];

 //Creating sql query
 $sql = "SELECT * FROM pelanggan WHERE email_pelanggan='$username' AND password_pelanggan='$password'";

 //executing query
 $result = mysqli_query($con,$sql);

 //fetching result
 $check = mysqli_fetch_array($result);

 //if we got some result
 if(isset($check)){
 //displaying success
 echo "success";
 }else{
 //displaying failure
 echo "failure";
 }
 mysqli_close($con);
 }
?>