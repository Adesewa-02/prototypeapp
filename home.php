<?php
$name=$_POST["fullname"];
$pass=$_POST["password"];
$mail=$_POST["email"];
$pn=$_POST["phone number"];
$mail=$pass;
$p=$mail=$pass;
if($p){
    echo "successful";
}else{
    echo "password error";
}
$db=mysqli_connect("localhost", "root", "", "prototypeapp");

$sql="INSERT INTO names(fullname, email, pn, passwords) VALUES ('$name', '$mail', '$pn', '$pass')";
$r = mysqli_query($db,$sql);
if($r){
    header("location:index.php");
}else{
    echo "opps,";
}
echo '<br>';
echo '<a href="index.php">Go back</a>';
?>