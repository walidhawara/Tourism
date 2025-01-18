<?php
include('config.php');
if (isset($_POST['submit'])){

    $email=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['email'])));
    $phone=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['phone'])));
    $username=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['username'])));
    
    if(empty($email) ){
        $email_error="<p id='error' style='color:red;'>please enter a email </p>";
        $errors=1;
        
    }
    if(empty($phone) ){
        $phone_error="<p id='error' style='color:red;'>please enter a phone number </p>";
        $errors=1;
        
    }
    if(strlen($phone)!=11){
        $phone_error="<p id='error' style='color:red;'>please enter a valid phone number </p>";
        $errors=1;
        
    }
    if(empty($username) ){
        $username_error="<p id='error' style='color:red;'>please enter a name </p>";
        $errors=1;
        
    }
    if(strlen($username)<6 || FILTER_var($username, FILTER_VALIDATE_INT)){
        $username_error="<p id='error' style='color:red;'>please enter a valid username </p>";
        $errors=1;
        
    }
    if(!isset($errors)){
        $view="SELECT * FROM user WHERE email='$email'";
        $res=mysqli_query($conn,$view);
        $result=mysqli_fetch_assoc($res);

        if(isset($result['email']) && isset($result['phone']) && isset($result['username']) && $result['email']===$email && $result['phone']===$phone && $result['username']===$username){
            
            header('location:update_pass.php');
        }else{
            $error="<p id='error'>unvalid username or email or phone </p>";
        }

        
    } 
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="password.css">
</head>
<body>
    <h1>Forget Password</h1>
    <form action="forget_pass.php" method="POST">
    <?php
            if(isset($username_error)){
                echo $username_error;
            }
        ?>
        <label for="user" style="font-size: x-large;">User Name</label><br>
        <input type="text" id ="user" name="username" placeholder=" UserName" style="width: 50%; height:8%;"><br>
        <?php
            if(isset($email_error)){
                echo $email_error;
            }
        ?>
        <label for="email" style="font-size: x-large;"> Email</label><br>
        <input type="email" id="email" name="email" style="width: 50%; height:8%;"placeholder=" Your Email"><br>
        <?php
            if(isset($phone_error)){
                echo $phone_error;
            }
        ?>
        <label for="phone"style="font-size: x-large;">Phone</label><br>
        <input type="text" id = "phone" name="phone" placeholder="Enter phone" style="width: 50%; height:8%;"><br><br>
        <input type="submit"value="Continue" name="submit" style="height: 7%;width: 20%;"class="btn">
    </form>
    <center>
       <h1><a href="login.php">login</a></h1> 
    </center>
</body>
</html>