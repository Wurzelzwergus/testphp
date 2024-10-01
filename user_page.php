<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Page</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <div class="content">
        <h3 class="admin-hi">hi, <span class="admin-admin">user</span></h3>
        <h1 class="admin-welcome">welcome <span class="admin-welcome-span"><?php echo $_SESSION['admin_name'] ?></span></h3>
        <p class="admin-adminPage">this is user page</p>
        <a href="login_form.php" class="btn">login</a> 
        <a href="register_form.php" class="btn">register</a> 
        <a href="logout.php" class="btn">LogOut</a> 
    </div>

</div>
    
</body>
</html>