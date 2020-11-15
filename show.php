<html>
<head>
<title>ITF Lab Database</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'nidaitf.mysql.database.azure.com', 'it63070095@nidaitf', 'CDBhlh62', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">           
  <table class="table table-hover">
    <table width="600" border="1">
      <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="150"> <div align="center">Edit </div></th>
    <th width="150"> <div align="center">Delete </div></th>
      </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><div align="center"><a href="edit.php">แก้ไข</a></div></td>
    <td><div align="center"><a href="delete.php">ลบ</a></div></td>
  </tr>
<?php
}
?>
    </table>
  </table>
</div>
<div class="container">
    <table class="table table-dark">
        <table width="600" border="1">
            <tr>
            <td><div align="center"><a href="form.html">เพิ่ม</a></div></td>
            </tr>
        </table>
    </table>
</div>


<?php
mysqli_close($conn);
?>
</body>
</html>
