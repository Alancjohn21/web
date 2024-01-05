<html>
<head>
	<title></title>
</head>
<style>
	
	 #regform{
	 	margin: auto;
	 	height: 600px;
	 	width:700px;
	 	background-color: lightblue;
	 	text-align: center;
	 	border: 5px outset green;

}


</style>

	<script>
		function validateform(){
			var name=document.forms['form1']['name'].value;
			var date=document.forms['form1']['date'].value;
			var style=document.forms['form1']['style'].value;
			if(name==""){
				alert("enter the name");
				return false;
			}
			if(date==""){
				alert("enter the date");
				return false;
			}
			if(style==""){
				alert("enter the style of work");
				return false;
			}
			if( date isNumber()){
				alert("enter a number in the date");
				return false;
			}
		}
	</script>

<body>

 <div id="regform">
 	<u><h1>Art Gallery</h1></u>
<center><table><form method="post" action="exam.php"  name='form1' onsubmit="return validateform()" >
	<tr>
	<td>Name Of Work:<input type="text" name="name"><br><br></td></tr>
	<tr>
	<td> Date:       <input type="text" name="date"><br><br></td></tr>
		<tr>
	<td>Style Of Work:<input type="text" name="style"><br><br></td></tr>
	<tr>
	<td><input type="submit" name="submit" value="Submit"></td></tr>
</form></table></center>
 	 </div>

<?php
 
	$conn=mysqli_connect("localhost","root","","exam");
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$date=$_POST['date'];
	$style=$_POST['style'];
	echo $name;
	echo $date;
	echo $style;

	$sql="insert into art  values('$name', '$date', '$style')";
	if(mysqli_query($conn, $sql))
	{
		echo "Inserted successfully!";
	}
	else
	{
		echo "Error in insertion!!";
	}
}

?>
</body>
</html>