<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
    
}
$sql = "SELECT id, name, email, bloodgroup, contact, city, address FROM display";
$result = $conn->query($sql);
echo "<table border='1'>
<tr>
<th>id</th>
<th>Name</th>
<th>email</th>
<th>bloodgroup</th>
<th>contact</th>
</tr>";
if($result->num_rows >0)
{
while($row=$result->fetch_assoc())
{
    echo "<tr>";
    echo "<td>" .$row['id']."</td>";
    echo "<td>" .$row['name']."</td>";
    echo "<td>" .$row['email']."</td>";
    echo "<td>" .$row['bloodgroup']."</td>";
    echo "<td>" .$row['contact']."</td>";
    echo "</tr>";
}   
echo "</table>";
}else{
    echo '0 results';
}
$conn->close();

?>
