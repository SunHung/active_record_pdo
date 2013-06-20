<?php
include '../class/db.php';
include '../config/config.php';
$db = new db;
$row = $db->get('log');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
</head>
<body>
<div align="center">
  <table width="1200" border="0">
    <tr>
      <th bgcolor="#999999" scope="col">NO</th>
      <th bgcolor="#999999" scope="col">Log</th>
    </tr>
    <?php
	while(!empty($row)){
	?>
    <tr>
      <td><?php echo $row['NO'];?></td>
      <td><?php echo $row['Log'];?></td>
    </tr>
    <?php 
	$row;
	}
	?>
  </table>
</div>
</body>
</html>