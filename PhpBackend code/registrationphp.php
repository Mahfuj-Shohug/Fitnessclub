<?php




$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];


//database connection

$conn=new mysqli('localhost','root','','customer');
if($conn->connect_error){
    die('connecttion failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(name,number,address,email,password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sisss",$name,$number,$address,$email,$password);
    $stmt->execute();

    header('location:login.php');
    $stmt->close();
    $conn->close();
}
?>

