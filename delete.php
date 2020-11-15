<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'nidaitf.mysql.database.azure.com', 'it63070095@nidaitf', 'CDBhlh62', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "DELETE FROM guestbook WHERE id='$id";


if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
