<html>
<head>
<style>
.error{color:red;}
</style>
</head>
<body bgcolor=lavender>
<center>
<font color="blue" face="Jokerman"><h1>WELCOME TO  BOOK CLUB</h1></font>
<br>
Words leave imprints in your mind like footprints in the  sand.
<hr color=purple size=3>
<table cellspacing=10 cellpadding=10 >
<tr>
<td><a href="booksadd.php"> HOME</a>
<td><a href="info.php">INFORMATION</a>
<td><a href="booksform.php">ADD BOOK RECORD</a>
<td><a href="bookslogin.php">LOGIN</a>
<td><a href="contactus.php">CONTACT US</a>
</table>
</center>
<hr color=purple size=3>
<?php
$nameerr=$anerr=$commenterr=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
{if(empty($_POST['name']))
{$nameerr="book name is req." ;}
if(empty($_POST['an']))
{$anerr="Author name req." ;}
if(empty($_POST['comment']))
{$commenterr="comment req." ;
}
}
?>
<center>
<h2>ADD TO YOUR BOOK READING JOURNEL</h2>
<p>
<form method="POST" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table cellspacing=10 bgcolor=#CCFFFF>
<tr>
<td rowspan=10><img src="bookmark.png" height=50%  align="left">
<td>Book name:
<td><input type="text" name="name"><span  class=error>*<?php echo $nameerr; ?></span>
<tr>
<td>Age
<td><input type="text" name="age">
<tr>
<td>Author's name:
<td><input type="text" name="an"><span  class=error>*<?php echo $anerr; ?></span>
<tr>
<td>Your thoughts
<td><input type="textbox" name="comment"><span  class=error>*<?php echo $commenterr; ?></span>
<tr>
<td>
<td><input type="Submit" name="add" value="BOOKS  LIST UPDATE">
</form>
<?php
if(isset($_POST['add']))
{
$servername='localhost';
$username='root';
$passwd="";
$d='club';
$conn=mysqli_connect($servername,$username, $passwd);
if(!$conn)
{
die('could not connect'.mysqli_connect_error());
}
if(!get_magic_quotes_gpc())
{$name=addslashes($_POST['name']);
$age=addslashes($_POST['age']);
$an=addslashes($_POST['an']);
$comment=addslashes($_POST['comment']);
}
else
{
$name=$_POST['name'];
$age=$_POST['age'];
$an=$_POST['an'];
$comment=$_POST['comment'];
}
$sql="INSERT INTO visitor(name, age, en,comment)  VALUES ('$name','$age','$an','$comment')";
mysqli_select_db($conn,$d);
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die('could not enter data:'.mysqli_connect_error());
}
mysqli_close($conn);
}
?>
</body>
</html>
