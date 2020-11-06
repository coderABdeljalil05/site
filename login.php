<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Abdeldjalil</title>
    <link rel="stylesheet" type="text/css" href="login.css">   
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(foto/call.jpg);
    background-size: cover;
   
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}


    </style>
</head>
<body>


<div class="container" style="margin-top:20px;" >
  <!-- Content here -->
  <?php 
$username = "souakria";
$password = "12345";


if(isset($_POST['login'])){
$getUserName = $_POST['username'];
$getPassword = $_POST['password'];

if($username === $getUserName && $password === $getPassword){
    session_start();
    $_SESSION['USER'] = $getUserName;
    $_SESSION['PASSWORD'] = $getPassword;
    $_SESSION['LOGIN'] = true;
    echo "<script> location.replace('audio_player/audio_player.html') </script>";

}else{
  echo "<script> alert('كلمة سر خاطئة') </script>";
 
}

}

?>
 <div class="login-box">
        <img src="call.jpg" class="avatar">
        <h1>Login Here</h1>

  <form method="POST">

<p>Uesername:</p>  <input type="text" name="username" required  placeholder="Enter Username "class="form-control"/>
<br>
<p>Password :</p> <input type="password" name="password" required  placeholder="Enter Password" class="form-control" />
<br>
<input class="btn btn-warning" name="login" type="submit" value="login">
</form>



</div>

</body>
</html>

