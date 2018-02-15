<html>
<body>
<?php


$conn=new mysqli('localhost','root','');


if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
echo "DB connected successfully";


mysqli_select_db($conn,"events2");

echo " \n DB is selected as test successfully";




$sql="INSERT INTO eventform (yourname,id,emailid,phoneno,eventname)VALUES('$_POST[yourname]','$_POST[id]','$_POST[emailid]','$_POST[phoneno]','$_POST[eventname]')";

if ($conn->query($sql) === TRUE)  {
	echo "new record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
</body>
</html>