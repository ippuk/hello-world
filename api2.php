<?php
$servername = "localhost";
$username = "root";
$password = "oPwixz3XBzg6";
$database = "customercomment";
$conn = new mysqli($servername, $username, $password, $database);
  $query = "SELECT * FROM commenttable";
  $result = $conn->query($query);
  $rows = array();

  $numrows = $result->num_rows;
while ($row = $result->fetch_assoc()){
 $rows[] = $row;}
/*
for ($j = 0 ; $j < $numrows ; ++$j)
{
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
  $rows[]=$row;
  }
*/
  echo json_encode($rows);

?>
