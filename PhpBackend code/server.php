<?php

 session_start();

$hostname='localhost';
$username='root';
$userpass='';
$dbname='customer';

$con=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');

mysqli_select_db($con,$dbname);


$name= $_POST['name'];
$password= $_POST['password'];
$s=" select*from registration where name='$name' && password='$password'";
$result=mysqli_query($con,	$s);
$num=mysqli_num_rows($result);

if($num==1){
  $_SESSION['name']=$name;
 header('location:user.php');
}else{

    echo "Wrong name or password!! 
     Please  go back and enter valid name and password!";

}


?>













