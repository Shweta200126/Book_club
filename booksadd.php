<html>
<head>
<?php
session_start();
if(isset($_SESSION['visits']))
$_SESSION['visits'] = $_SESSION['visits']+1;
else
$_SESSION['visits']=1;
echo "Welcome reader,"."<br>"." Your visits ="." ". $_SESSION['visits']."<br>";
echo date('F d Y')."<br>".date('l');
?>
<hr color=purple size=3>
</head>
<body bgcolor=lavender>
<center>
<font color="blue" face="Jokerman"><h1>WELCOME TO  BOOK CLUB</h1></font>
<br>
Words leave imprints in your mind like footprints in the  sand.
<hr color=purple size=3>
<table cellspacing=5 cellpadding=10>
<tr>
<td><a href="booksadd.php"> HOME</a>
<td><a href="info.php">INFORMATION</a>
<td><a href="booksform.php">ADD BOOK RECORD</a>
<td><a href="bookslogin.php">LOGIN</a>
<td><a href="contactus.php">CONTACT US</a>
</table>
<hr color=purple size=3>
<img src="book1.png" height=60% width=30%>
</body>
</html>
