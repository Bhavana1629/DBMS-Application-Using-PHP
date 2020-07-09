
<html>
<body bgcolor="orange">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'college event') or die(mysqli_error());
$fn=$_REQUEST['Eventhead_name'];
$ln=$_REQUEST['Eventhead_code'];
$ln1=$_REQUEST['Eventhead_phno'];
$mn=$_REQUEST['Coordinator_usn'];
$query="INSERT INTO event_head VALUES('$fn','$ln','$ln1','$mn')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";
$var=mysqli_query($dbh,"SELECT * from event_head");
echo"<table border_size=20>";
	
echo " <tr> <th>Eventhead_name</th> <th>Eventhead_code</th> <th>Eventhead_phno</th> <th>Coordinator_usn</th>
</tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td>
	 </tr>";
}
echo"</table>";
?>


</html>
</body>
<form>
<p><a href="admin home.html">Admin Home page</a></p>
</form>





<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>



<table style="width:100%">
  
</table>

</body>
</html>
