<?php
session_start();
include('config.php');

if (isset($_POST['submitt'])){
    
   
    $gg=$_POST['idd'];
    $phone=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['pnumber'])));
    $number=$_POST['num_ticket'];
    
    $sql="INSERT INTO book (num_ticket,book_phone,book_user_id,book_trip_id)
    VALUES ('$number', '$phone','$_SESSION[id]','$gg')";
    mysqli_query($conn,$sql);

    header('location:Tours.php');
}
    
?> 