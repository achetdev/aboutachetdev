<?php
$host ='localhost';
$user ='root';
$pswd ='39113977';
$dbs ='achetdev';

$con =mysqli_connect($host,$user,$pswd,$dbs);
if(!$con){
    echo mysqli_connect_error($con);
}
?>