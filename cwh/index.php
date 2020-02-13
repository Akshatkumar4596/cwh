<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $login = false;
    $con =  mysqli_connect($servername,$username,$password);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['name'];
        $password = $_POST['pass'];
    }
    // $sql = "INSERT INTO `login_page`.`login_info` (`sno`, `username`, `password`, `date`) VALUES (NULL, 'AKSHAT', '1234', current_timestamp());";
    
    $sql = "SELECT username,password FROM `login_page`.`login_info`";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
            if($username==$rows['username'] && $password==$rows['password'])
            {
                $login=true;
            }
        }
    }
    if($login==true){
        header("Location:success.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav id="nav">
        <ul>
            <li>Home</li>
            <li>Services</li>
            <li>About Us</li>
            <li>Contact Us</li>
        </ul>
    </nav>
    
    <div class="container">
        <form name="login" action="index.php" method="post">
            <span>Login</span>
            <input type="text" name="name" id="name" placeholder="Enter your username">
            <input type="password" name="pass" id="pass" placeholder="Enter your password">
            <button class="btn">Submit</button>
        </form>
        <span><a>Forgot Password!</a></span>
        <span><a>Don't have an account? Click Here</a></span>
   </div>

</body>
</html>