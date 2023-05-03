<?php
$connect = mysqli_connect("localhost", "root", "", "blog");

if($connect ->connect_error){
    die("connection failed:" .$connect->connect_error);
}
else{
    echo "connected";
}

?>
