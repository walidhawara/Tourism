<?php
session_start();
include('config.php');

if (isset($_POST['submit'])){

    $email=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['email'])));
    $password=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['password'])));
    
    if(empty($email) ){
        $email_error="<p id='error' style='color:red;'>please enter a username </p>";
        $errors=1; 
    }
    if(empty($password)){
        $password_error="<p id='error' style='color:red;'>please enter a password </p>";
        $errors=1; 
    }

    if(isset($_POST['save'])){
        $save=htmlentities(mysqli_real_escape_string($conn,stripcslashes($_POST['save'])));
        setcookie('email',$email,time()+3600,'/');
        setcookie('password',$password,time()+3600,'/');
    }
    if(!isset($errors)){
        $view="SELECT * FROM user WHERE email='$email'";
        $res=mysqli_query($conn,$view);
        $result=mysqli_fetch_assoc($res);

        if(isset($result['email']) && isset($result['password']) &&$result['email']===$email && $result['password']===$password){
            $_SESSION['id']=$result['id'];
            $_SESSION['username']=$result['username'];
            $_SESSION['email']=$result['email'];
            $_SESSION['password']=$result['password'];
            $_SESSION['re_password']=$result['re_password'];
            $_SESSION['gender']=$result['gender'];
            $_SESSION['phone']=$result['phone'];
            header('location:home.php');
        }else{
            $error="<p id='error' style='color:red;'> unvalid username or password </p>";
        }   
    } 
}
    
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-form"> 
<form action="login.php" method="POST">
<h3>login</h3>
        <?php
            if(isset($email_error)){
                echo $email_error;
            }
            if(isset($error)){
                echo $error;
            }
        ?>
        <input type="email" name="email" class="box" placeholder="Enter your email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" ><br>

        <?php
            if(isset($password_error)){
                echo $password_error;
            }
        ?>
        <input type="password" name="password" class="box" placeholder="Enter password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"><br>
        <input type="checkbox" name="save" id="remember" value="1"> <label for="remember">remember me</label>
        
        <input type="submit" name="submit" value="login" class="btn"><br>

        <p>forget password? <a href="forget_pass.php">Click here</a></p>
        <p>don't have account <a href="register.php">Register</a>
    </p>
</form>
    <!-- <center>
       <h1><a href="register.php">register</a></h1> 
       <h1><a href="forget_pass.php">forget pass</a></h1> 
    </center> -->
    </div>
</body>
</html>
