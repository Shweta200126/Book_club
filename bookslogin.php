<html>
<head>
</head>
<body bgcolor=lavender>
<center>
<font color="blue" face="Jokerman"><h1>WELCOME TO  BOOK CLUB</h1></font>
<br>
Words leave imprints in your mind like footprints in the  sand.
<hr color=purple size=3>
<table cellspacing=10 cellpadding=10>
<tr>
<td><a href="booksadd.php"> HOME</a>
<td><a href="info.php">INFORMATION</a>
<td><a href="booksform.php">ADD BOOK RECORD</a>
<td><a href="bookslogin.php">LOGIN</a>
<td><a href="contactus.php">CONTACT US</a>
</table>
<hr color=purple size=3>
Login to see your book list
<?php
$msg=" ";
if(isset($_POST['login'])&& !empty($_POST['username'])  && !empty($_POST['password']))
{if($_POST['username'] == 'admin' &&
$_POST['password'] == '1234')
{ $_SESSION['valid']=true;
$_SESSION['timeout'] =time();
$_SESSION['username']='admin';
header("location:visitor-details1.php");}
else
$msg="wrong username or password";
}
?>
<form action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']);?>" method="post">
<?php echo $msg;?>
<p>
Username: <input type="text" name="username"  placeholder="username">
<p>
Password: <input type="text" name="password"  placeholder="password">
<p>
<input type="submit" name="login" value="login">
</form>
<img src="read.png" height=50% width=30%>
</body>
</html>
