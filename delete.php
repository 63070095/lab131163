<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'nidaitf.mysql.database.azure.com', 'it63070095@nidaitf', 'CDBhlh62', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$ID = $row['ID'];


$sql = "DELETE FROM guestbook WHERE $ID;


if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
