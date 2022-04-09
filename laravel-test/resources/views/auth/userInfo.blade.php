<?php
use resources\views\dashboard;
use app\models\User;
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>User Table</h2>

<table>
  
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>Email</th>
    <th>MSSV</th>
    <th>DiaChi</th>
    <th>Phone</th>
  </tr>
  <?php // foreach($user as $users){ ?>
    <tr>
     
      <td><?php // echo $user["name"]?></td>
      
    </tr>
   <?php 
//}
?>
</table>

</body>
</html>
