<?php

require('../../includes/init.php');

$id=$_POST['id'];
$roleid=$_POST['roleid'];
$name=$_POST['name'];
$salary=$_POST['salary'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="UPDATE `users` SET RoleId=?,Name=?,Salary=?,Email=?,Mobile=?,Address=?,City=?,State=?  WHERE Id=? ";
$param=[$roleid,$name,$salary,$email,$mobile,$address,$city,$state,$id];
execute($query,$param);

?>