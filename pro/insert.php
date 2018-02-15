<?php
$name = "name";
$email = "mail";
$investment = "invest";
$Datejoined="joined";


$conn = new mysqli($name, $mail, $investment,$Datejoined);

if ($conn->connect_error) {
 die("connection failed:" . $conn->connect_error); 
}
 echo "DB connected successfully"; 
mysqli_select_db($conn,"vidya");
 echo " \n DB is selected as test successfully";
 $sql="INSERT INTO insert (name,email,investment,Datejoined)VALUES('$_POST[Sno]','$_POST[name]','$_POST[mail]','$_POST[investment]','$_POST[joined]',);
 if ($conn->query($sql) === TRUE) {
 echo "new record created successfully"; }
 else { echo "Error: " . $sql . "
" . $conn->error; } 
mysqli_close($conn); ?>