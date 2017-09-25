<?php
//put sha1() encrypted password here - example is 'hello'
$password = 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
} 

if (!$_SESSION['loggedIn']): ?>

<html><head><title>Login</title><link rel="icon" href="http://www.iconarchive.com/download/i102635/graphicloads/flat-finance/lock.ico" type="image/x-icon"/></head>
  <body>
    <h2>Autentification Required:</h2>
    <form method="post">
      Password: <input type="password" name="password"> <br><br>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>

<?php
exit();
endif;
<title>Password Correct</title>
<h1>Hurray!</h1>
<hr>
<p>You entered the right password. This could be a secret text...</p>
<hr>
<a href='logout.php'>Click here to Log Out</a>
