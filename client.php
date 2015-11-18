<?php // sqltest.php
 $servername = "localhost";
$username = "root";
$password = "oPwixz3XBzg5";
$dbname = "customercomment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) die($conn->connect_error);
 
 
 	
	
	$attitude = mysql_real_escape_string($conn, $_POST['attitude']);
	$name = mysql_real_escape_string($conn, $_POST['name']);
	$date = mysql_real_escape_string($conn, $_POST['date']);
	$email = mysql_real_escape_string($conn, $_POST['email']);
	$comment = mysql_real_escape_string($conn, $_POST['comment']);
		
$sql = "INSERT INTO mycomments (attitude, name, date, email, comment)
VALUES ('John', 'Doe', '1999','john@example.com','asfdawefasvdagbawefawe')";
    $query = "INSERT INTO mycomments (attitude, name, date, email, comment)  VALUES" .
      "('$attitude', '$name', '$date', '$email', '$comment')";
    $result=mysqli_query($con, "SELECT * FROM mycomments");
   
 
echo "<table border='1'>
<tr>
<th>attitude</th>
<th>name</th>
<th>date</th>
<th>email</th>
<th>comment</th>
</tr>";


$result = mysqli_query($con,"SELECT * FROM delta ORDER BY Aircraft_Type");


while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['attitude'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['comment'] . "</td>";
  echo "</tr>";
}


echo "</table>";

  $result->close();
  $conn->close();

  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>
