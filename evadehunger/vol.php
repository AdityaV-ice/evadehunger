<!DOCTYPE html>
<html>
<head>
    <title>Vol-Evade Hunger</title>
    
<style>
body{
    width: 100%;
    height: 100vh;
    margin:0;
    background-color: #18181d;
    color: #f5f6f7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
}
table {
    border: 1px solid #1e1e60;
    width: 100%;
    color: #f5f6f7;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}
td{
    border: 1px solid #1e1e60;
}
th {
color: white;
}
#btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 0.25px 30px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  

</style>
</head>
<body>
<div class="topnav">
            <a href="EvadeHunger.html">Home</a>
          </div>
    <center><h1>Evade Hunger Volunteer Portal 
    <?php
    $conn = mysqli_connect("localhost", "root", "", "contact");
$sql = "SELECT  SUM(donno) from registration";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)){
echo " Total meals served : ". $row['SUM(donno)'];
echo "<br>";
}
?>
    </h1></center><br><br><br>

<table>
<tr>
<th>Sl no</th>
<th>First Name</th>
<th>Last Name</th>
<th>Mail ID</th>
<th>Phone Number</th>
<th>Food Supplies</th>
<th>Address</th>
<th>Pincode</th>
<th>Operation</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "contact");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration ORDER BY donno DESC LIMIT 10;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "  
    <tr>
         <td>".$row['id']."</td> 
         <td>".$row['fname']."</td>  
         <td>".$row['lname']."</td>  
         <td>".$row['mail']."</td>  
         <td>".$row['pno']."</td>  
         <td>".$row['donno']."</td>  
         <td>".$row['addr']."</td> 
         <td>".$row['pcode']."</td> 
         <td><a href='delete.php? id=".$row['id']."' id='btn'>Delete</a></td>  
    </tr>  
";  
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>