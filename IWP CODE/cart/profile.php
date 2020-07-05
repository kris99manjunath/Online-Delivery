<?php 
session_start();
?>
<html>
<head>
    <title><?php echo $_SESSION['user']."'s profile"; ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(bg.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    color: white;
    font-size: 1.5em;
    
}
    
    
    
    </style>
    
    
    
    </head>
    
    <body>
        <center>
        <div>
            <img src="avatar.jpg" height="100px" width = "100px">
            <p>Name : <?php echo $_SESSION['name']; ?></p>
            <p>Email : <?php echo $_SESSION['email']; ?></p>    
            <p>Username : <?php echo $_SESSION['user']; ?></p>    
            <p>Date : <?php echo $_SESSION['date']; ?></p>    
        </div>
        </center>
</body>
</html>