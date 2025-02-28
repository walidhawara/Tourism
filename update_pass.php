<?php
include('config.php');

if (isset($_POST['submit'])){
    $password=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['password'])));
    $email=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['email'])));
    $repassword=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['repassword'])));
    
    if(empty($password) || empty($repassword) ||  strlen($repassword)<8 || strlen($password)<8){
        $password_error="<p id='error' style='color:red;'>please enter a password and pass=repass </p>";
        $errors=1;
    }
    if(empty($email) ){
        $email_error="<p id='error' style='color:red;'>please enter a email </p>";
        $errors=1;
    }
    if(!isset($errors)){
        $sql="select * from user where email='$email'";
        $res=mysqli_query($conn,$sql);
        $result=mysqli_fetch_assoc($res);
        if(isset($result['email'])){
            $view="UPDATE user SET password='$password' , re_password='$repassword' where email='$email'";
            mysqli_query($conn,$view);
            header("Location:login.php");
        }else{
            $email_error="<p id='error'>email not exist </p>";
        }
    }
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="code.css">
</head>
<body>
<h1>Change Password</h1>
<form action="update_pass.php" method="POST">
        <?php
            if(isset($email_error)){
                echo $email_error;
            }
        ?>
        <label for="email"style="font-size: x-large;"> Email</label><br>
        <input type="email" id="email" name="email" style="width: 50%; height:8%;"placeholder="Your Email"><br>
        <?php
            if(isset($password_error)){
                echo $password_error;
            }
        ?>
        <label for="pass"style="font-size: x-large;"> Enter Password</label><br>
        <input type="password" id="pass" name="password" style="width: 50%; height:8%;"placeholder="New Password"><br>
        <label for="confirm" style="font-size: x-large;">Confirm Password</label><br>
        <input type="password" id ="confirm" name="repassword" style="width: 50%; height:8%;" placeholder="Confirm Password"><br><br>
        <input type="submit"value="Submit" name="submit" class="btn"style="width:20%;height:7%;">

    </form>
    <h1><a href="login.php">login</a></h1>
    
</body>
</html>