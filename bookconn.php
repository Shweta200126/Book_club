<?php
$s= 'localhost';
$u= 'root';
$p= '';
$d='club';
$conn=mysqli_connect($s,$u,$p);
if(!$conn)
{ 
die('could not connect'.mysqli_connect_error());
}
echo "connected successfully"."<br>";

$sql="CREATE DATABASE club";
if(mysqli_query($conn,$sql))
{
echo "<br>"."database created";
}
else
{
echo "not created";
}

$sqp="CREATE TABLE visitor(
id int(4) not null auto_increment primary key,
name varchar(50) default null,
age int(2) default null,
en varchar(50) default null,
comment varchar(50) default null);" ;

mysqli_select_db($conn,$d);

if(mysqli_query($conn,$sqp))
{
echo "<br>"."table created successfully" ;
}
else
 {
echo "error in create table" ;
}
?>
</body>
</html>
