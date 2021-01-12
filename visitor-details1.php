<html>
<head>
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
<img src="list.png" height=60% width=25% align="left">
<center>
<p>
<b>YOUR BOOK READING JOURNEL</b>
<p>
<table border=1 cellspacing=0 bordercolor=blue  align=center bgcolor=white>
<tr>
<th align="center">BOOK NO.
<th align="center">BOOK NAME
<th align="center">AUTHOR'S NAME
<th align="center">AGE
<th align="center">COMMENT
<tr>
<?php
$servername= 'localhost';
$username= 'root';
$passwd='';
$d='club';
$conn=mysqli_connect($servername,$username, $passwd,$d);
if(mysqli_connect_errno())
  {
  echo "Failed to connect to  MySQL:".mysqli_connect_error();
  }
$result=mysqli_query($conn,"SELECT * FROM visitor");
while($row = mysqli_fetch_array($result))
{ echo"<tr>".
"<td align=center>"."{$row['id']}".
"<td align=center>"."{$row['name']}".
"<td align=center>"."{$row['en']}".
"<td align=center>"."{$row['age']}".
"<td align=center>"."{$row['comment']}".
"</tr>";
}
mysqli_close($conn);
?>
</table>
<center>
<a href="booksadd.php"> LOGOUT</a>

</body>
</html>
