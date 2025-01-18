<?php
session_start();
include('config.php');

if (isset($_POST['submit'])){

    $comment=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['comment'])));
    
    $sql="INSERT INTO comments (comment,comm_user_id)
    VALUES ('$comment', '$_SESSION[id]')";
    mysqli_query($conn,$sql);

    header('location:home.php');
}
    
?> 