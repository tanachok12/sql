<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register system</title></title>


    <link rel="stylesheet" href = "style.css">
</head>
<body>
    <div class= "header">
    <h2>Home Page</h2>
    </div>
    <div class="content" >
    <?php if(isset($_SESSION['username'])):?>
    <p>ยินดีต้อนรับ<strong><?php echo $_SESSION['username'];?></strong> </p>
    <p><a href="index.php?logout='1'" style= "color : red ">Logout </a> </p>
    <?php endif?>
    </div>
</body>
</html>