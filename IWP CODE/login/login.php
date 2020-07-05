<?php
session_start();
?>
<html>
    <head>
    <title>Login</title>
       
    </head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div class="loginbox">
        <img src="avatar.jpg" class="avatar">
            <h1>Login</h1>
            <form method="post" >
            <p>Username</p>
                 
                <input type="text" name="username" id="x" placeholder="Enter Username" required></input>
            <p>Password</p>
                <input type="password" name="password" id="y" placeholder="Enter Password" required></input>
        <br>
        <br>
            <input type="submit"  value="Login" id="submit"><br>
            
            <a href="sign.php">Sign up</a>    
            </form>
        </div>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = new mysqli('localhost','root','','test');
    $sql = "select * from login where uname = '$username' and password = '$password'";
    $result = $con->query($sql);
    if($result->num_rows!=0)
    {
        while($row = $result->fetch_assoc()){
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['user']=$row['uname'];
            $_SESSION['date']=$row['date'];
        }
        header('location: ../../cart/index.php');
    }
    else{
        header('location: fail.html');
    }
}
?>