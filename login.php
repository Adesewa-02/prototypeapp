<?php
session_start();
$un=$_POST["fullname"];
$pw=$_POST["passwords"];
$db=mysqli_connect("localhost","root","","prototypeapp");
$sql="SELECT * FROM names WHERE fullname='$un' AND pword='$pw'";
$r=mysqli_query($db,$sql);
$num=mysqli_num_rows($r);
   
    if($num == 1){
        while($rows=mysqli_fetch_assoc($r)){
            $_SESSION["fullname"]= $rows["fullname"];
            header("location:house.php");
        }

    }

echo '<br>';
echo '<a href="index.php">Go back</a>';
?>
