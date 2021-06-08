<?php
// $connection = new mysqli('localhost','root','','eternityfoundation') or die("connection fails");
// if($connection){
//     echo "Connection Stablish";
// }
$servername = 'localhost';
$dbname = 'eternityfoundation';
$username = 'root';
$password = '';
$conn = new mysqli($servername,$username,$password,$dbname) or dir("connection fail");
?>
