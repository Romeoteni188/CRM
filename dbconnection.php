<?php
// $con=mysqli_connect("localhost", "root", "", "crm");
$con=mysqli_connect("192.168.1.31", "root", "", "crm");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>
