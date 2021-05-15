<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title></title>


    <link rel="stylesheet" href = "style.css">
</head>
<body>
    <div class="header">
    <h2>Register</h2>
    </div>
    <from action = "Register_db.php">
   <div class="input-group" >
   <label for= "Username "> Username </label>
   <input type = "text" name="username">
   </div>
   <div class="input-group" >
   <label for= "Email "> Email </label>
   <input type = "Email" name="Email">
   </div>  <div class="input-group" >
   <label for= "Password"> Password </label>
   <input type = "Password" name="Password">
   </div>  <div class="input-group" >
   <label for= "Confirm Password "> Confirm Password </label>
   <input type = "Confirm Password" name="Confirm Password">
   </div>  <div class="input-group" >
   <input type = "submit" name="reg_user " class = " btn "> สมัคสมาชิก </botton>
   </div>
   <p > เป็นสมาชิกเเล้วใช่หรือไม่ <a href="login.php" >sign in </a> </p>
    </from>
</body>
</html>