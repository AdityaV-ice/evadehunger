<!DOCTYPE html>
<html>

<head>
	<title>Evade Hunger</title>
    
</head>

<body>
<div class="topnav">
			<a href="EvadeHunger.html">Home</a>
            <a href="">Volunteer</a>
          </div>
	<center>
		<?php
		
		$conn = mysqli_connect("localhost", "root", "", "contact");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$fn = $_REQUEST['fname'];
		$ln = $_REQUEST['lname'];
		$ma = $_REQUEST['mail'];
		$ph = $_REQUEST['pno'];
		$dc = $_REQUEST['donno'];
		$adr= $_REQUEST['addr'];
		$pn = $_REQUEST['pcode']; 
		
		$sql = "INSERT INTO registration (fname,lname,mail,pno,donno,addr,pcode) VALUES ('$fn' ,'$ln', '$ma', '$ph', '$dc', '$adr', '$pn')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your request has been placed <br> One of our volunteer will reach out to you soon !</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>


