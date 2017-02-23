<?php
$username=$_POST["username"];
$age=$_POST["age"];
echo json_encode(array("username"=>$username,"age"=>$age));