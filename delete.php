<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'nidaitf.mysql.database.azure.com', 'it63070095@nidaitf', 'CDBhlh62', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = $sql = "DELETE FROM guestbook WHERE name='$name'";
$sql = "DELETE FROM guestbook WHERE Comment='$comment'";

if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
    echo '<a href="https://nidaweb.azurewebsites.net/show.php"> click here to open first page </a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
