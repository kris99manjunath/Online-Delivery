<?php
session_start();
?>
<html>
    <head>
    <title>Sign up</title>
    </head>
    
        <link rel="stylesheet" type="text/css" href="style2.css">

    <body>
        <div class="signupbox">
        <img src="avatar.jpg" class="avatar">
            <h1>Sign up</h1>
        <form action="sign.php" method="post">
            
            <p>Name *</p>
                <input type="text" name="name" placeholder="Enter Your Name" required>
            <p>EmailID *</p>
                <input type="email" name="email" placeholder="Enter Email" required>
            
            <p>Username *</p>
                <input type="text" name="username" placeholder="Enter Username" required >
            <p>Password *</p>
                <input type="password" name="password" placeholder="Enter Password" required >
            <p>Confirm Password *</p>
                <input type="password" name="" placeholder="Confrim Password" required>
            <input type="submit" value="Submit" name="submit">
            
            <a href="login.php">Back To Login</a> 
            

        </form>
           
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $con = new mysqli('localhost','root','','test');
    if($con){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $date = date("l jS \of F Y h:i:s A");
    if((preg_match("/[a-zA-Z]+/",$name))&&(preg_match('/[0-9A-Za-z_!@#$%]{8,16}/', $password))){
        $sql = "insert into login values('$name','$email','$uname','$password','$date')";
        if($con->query($sql)===TRUE){
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['user']=$uname;
            $_SESSION['date']=$date;
            header('location:confirm.html');
        }
        else{
            header('location:fail.html');
        }
    }
    else{
            header('location:fail.html');
        }
    }
}
?>
