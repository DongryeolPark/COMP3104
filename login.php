<?php
//points3.
session_set_cookie_params(31536000);
session_start();

// Check if the user is already logged in and redirect to welcome page.
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "user" && $password = "pass"){
    //session variable to use
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    //redirect file to welcome page
    header("Location: welcome ");
    }else{
    echo "Invalid creadentials";
    }
}

?>

<form method="POST">
    <label for="username">username: </label>
    <input type="text" name="username" value="">
    <br>
    <label for="password">password: </label>
    <input type="password" name="password" value="">
    <input type="submit" name="login" value="login">
</form>