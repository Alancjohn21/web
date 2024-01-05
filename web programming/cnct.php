<html>
<head>
	</head>
	<body>
		<form method ="get" action="cnct.php" >
			NAME:<input type="text" name="name">
			FROM:<input type="text" name="from">
			Number:<input type="text" name="number">
			<input type="submit" name="submit" value="submit">

		</form>
		<?php
		if(isset($_GET['submit']))
		{
			$cname=$_GET["name"];
			$place=$_GET["from"];
			$no=$_GET["number"];
			echo "$cname";
			$conn=mysqli_connect("localhost","root","","connect");
			if(!$conn){
				echo"failed";

			}
			else{
				echo"success";
			}
			$sql=" insert into details values('$cname','$place','$no')";
			if(mysqli_query($conn,$sql))
			{
				echo"inserted succesfully";
			}
			else
			{
				echo"error";
			}
			$res="select * from details";
			$rs = mysqli_query($con,$res);


				  print "
				  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
				   <tr>
				   <td width=100>ID:</td> 
				  <td width=100>First Name</td> 
				  <td width=100>Last Name</td> 
				  <td width=100>Email</td> 
				  <td width=100>User Name</td>
				  <td width=100>Password</td> 
				  <td width=100>Date Of Birth</td> 
				  <td width=100>Gender</td> 
				  </tr>"; 
				 while($row = mysqli_fetch_array($rs))
				 { 
				print "<tr>"; 
				print "<td>" . $row['id'] . "</td>"; 
				print "<td>" . $row['fname'] . "</td>"; 
				print "<td>" . $row['lname'] . "</td>"; 
				print "<td>" . $row['Email'] . "</td>";
				print "<td>" . $row['uname'] . "</td>";
				print "<td>" . $row['password'] . "</td>";
				print "<td>" . $row['dob'] . "</td>";
				print "<td>" . $row['gender'] . "</td>"; 
				print "</tr>"; 
				} 
				print "</table>"; 
			}
 ?>

</body>