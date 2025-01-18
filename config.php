<?php
$conn=mysqli_connect('localhost','root','','tourism');

if(!$conn){
    echo "Error " . mysqli_connect_error();
}

?>