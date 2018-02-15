<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='reg.css'>
<title></title>
<h3><center style="color:red;">REGISTRATION FORM</center></h3>
</head>
<body>
<center style="color:blue;">
<form action="insertion.php" method="post">
<table>
<tr>
  <td>Name:</td>
  <td><input type="text" name="yourname"></td>
</tr>
<tr>
  <td>ID:</td>
  <td><input type="int" name="id"></td>
</tr>
<tr>
   <td><select name=branch">
       <option value="Branch">Branch</option>
       <option value="CSE">CSE</option>
	   <option value="ECE">ECE</option>
	   <option value="EEE">EEE</option>
	   <option value="ECM">ECM</option>
	   <option value="BT">BT</option>
	   </select></td>
</tr>
<tr>
    <td><select name="yearofstudy">
	   <option value="Year">Year Of Study</option>
       <option value="1st Year">1st Year</option>
	   <option value="2nd Year">2nd Year</option>
	   <option value="3rd Year">3rdYear</option>
	   <option value="4th Year">4th Year</option>
	   </select></td>
</tr>
<tr>
    <td>Email ID:</td>
	<td><input type="text" name="emailid"></td><br>
</tr>
<tr>
    <td>Phone No:</td>
	<td><input type="int" name="phoneno"></td><br>
</tr>
<tr>
    <td>Event Name:</td>
	<td><input type="text" name="eventname"></td><br>
</tr>
<tr>
    <td><button type="submit" value="Submit">Submit</button><br>
	<td><button type="reset"  value="Submit">Reset</button>
</tr>
</table>
</form>
</center>
</body> 
</html>