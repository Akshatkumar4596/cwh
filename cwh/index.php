<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        <form action="index.php" method="post">
            <span>Login</span>
            <input type="text" name="name" id="name" placeholder="Enter your username">
            <input type="password" name="pass" id="pass" placeholder="Enter your password">
            <button class="btn">Submit</button>
        </form>
   </div>
</body>
</html>