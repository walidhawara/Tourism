<?php
include('config.php');


if (isset($_POST['submit'])){

    $username=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['username'])) ) ;
    $email=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['email'])));
    $password=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['password'])));
    $re_password=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['re_password'])));
    $phone=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['phone'])) ) ;
    $gender=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['gender'])));
    
    $view="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($conn,$view);
    $num_rows=mysqli_num_rows($result);
    if($num_rows!=0){
        $email_error="<p id='error' style='color:red;'>This account already exists </p>";
        $errors=1;
    }
    
    if(empty($username) || strlen($username)<6 || FILTER_var($username, FILTER_VALIDATE_INT)){
        $user_error="<p id='error' style='color:red;'>please enter a valid username </p>";
        $errors=1;   
    }
    if(empty($phone) || strlen($phone)!=11){
        $phone_error="<p id='error' style='color:red;'>please enter a valid phone number </p>";
        $errors=1;
       
    }
    if(empty($email)){
        $email_error="<p id='error' style='color:red;'>please enter a valid email </p>";
        $errors=1;
        
    }
    if(empty($password) || strlen($password)<8 ){
        $password_error="<p id='error' style='color:red;'>please enter a valid password </p>";
        $errors=1;
    }
    if(empty($re_password) || strlen($re_password)<8){
        $re_password_error="<p id='error' style='color:red;'>please Verify password confirmation </p>";
        $errors=1;
        
    }
    if($password !== $re_password){
        $re_password_error="<p id='error' style='color:red;'>The password and password confirmation must be identical</p>";
        $errors=1;
        
    }
    
    if(empty($gender)){
        $gender_error="<p id='error' style='color:red;'>please enter a gender</p>";
        $errors=1;
    }

    
    if(!isset($errors) && $num_rows==0){
        $sql="INSERT INTO user (username,email,password,re_password,gender,phone)
            VALUES ('$username', '$email', '$password', '$re_password', '$gender','$phone')";
        
        mysqli_query($conn,$sql);

        header('location:login.php');
    }
        
    }     
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="project.css">
</head>
<body class="re">
<div class ="reg">
        <h1 class = "h"> Register </h1>
    <form action="register.php" method="POST" class="f">
        <label for = "name"> Name </label>
        <input type = "text" name="username" placeholder=" username" required id = "name">
        <?php
            if(isset($user_error)){
                echo $user_error;
            }
        ?><br>
        <label for = "email"> Email </label>
        <input type = "email" name="email" placeholder=" email" required id = "email">
        <?php
            if(isset($email_error)){
                echo $email_error;
            }
        ?><br>
        <label for = "phone"> Phone </label>
        <input type = "text" name="phone" placeholder=" phone" required id = "phone">
        <?php
            if(isset($phone_error)){
                echo $phone_error;
            }
        ?><br>
        <label for = "pass"> password </label>
        <input type = "password" name="password" placeholder=" password" required id = "pass">
        <?php
            if(isset($password_error)){
                echo $password_error;
            }
        ?><br>
        <label for = "cpass"> Confirm password </label>
        <input type = "password" name="re_password" placeholder=" confirm password" required id = "cpass">
        <?php
            if(isset($re_password_error)){
                echo $re_password_error;
            }
        ?><br>
        <label for = "gender"> Gender </label>
            <input list = "gender" name = "gender" id="gender">
            <datalist id="gender">
                <option value="Male">
                <option value="Female">
            </datalist>
        <?php
            if(isset($gender_error)){
                echo $gender_error;
            }
        ?><br>
        <input class = "s"type="submit" value = "Submit" name="submit">



    </form>
    </div>
    <center>
       <h1><a href="login.php">login</a></h1> 
    </center>
</body>
</html>