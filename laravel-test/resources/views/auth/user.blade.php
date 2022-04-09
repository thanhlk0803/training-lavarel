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
a{
  text-decoration: none
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
  </tr>
  <?php // foreach($user as $users){ ?>
    <tr>
     
      <td><?php // echo $user["name"]?> <a  href= ""> 01</a></td>
      <td><?php // echo $user["name"]?>thanh Trần</td>
      <td><?php // echo $user["name"]?>thanh126126@gmail.com </td>
      
    </tr>
    <tr>
     
      <td><?php // echo $user["name"]?> <a href= "resource.php">02</a></td>
      <td><?php // echo $user["name"]?>thanh Trần</td>
      <td><?php // echo $user["name"]?>thanh126@gmail.com </td>
      
    </tr>

   <?php 
//}
?>
</table>

</body>
</html>
