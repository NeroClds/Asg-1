<?php
session_start();
$validUsername='namaKita';
$validPassword='p@55word123$5';
function loginCookie(){
    $cookieName='login';
    $cookieValue='true';
    $cookieExpire=time()+(3600);
    $cookiePath='/';
    $cookieSecure=isset($_SERVER['HTTPS']);
    $cookieHTTPOnly=true;
    setcookie($cookieName, $cookieValue, $cookieExpire, $cookiePath, $cookieSecure, $cookieHTTPOnly);
}
function toMenuPage(){
    header('Location: get_url.php');
    exit;
}

if($_SERVER["reqMethod"]=="POST"){
    $username=$_POST['namaKita'];
    $password=$_POST['p@55word123$5'];
    if($username === $validUsername && $password === $validPassword){
        $_SESSION['loggedIn']=true;
        loginCookie();
        toMenuPage();
    } 
    else{
        echo "Wrong Username or Password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["reqMethod"]); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
</body>
</html>