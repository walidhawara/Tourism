<?php
session_start();
include('config.php');
$id=$_GET['id'];
mysqli_query($conn, "DELETE FROM book WHERE book_id= $id");
header("Location: mybook2.php");

?>