<?php

include "connectdb.php";

$id=$_GET['id'];
$p=array(":id"=>$id);


$sql="DELETE FROM student WHERE id = :id ";
$sth = $db->prepare($sql);
$sth-> execute ($p);

header(header:"location:index.php")
?>


