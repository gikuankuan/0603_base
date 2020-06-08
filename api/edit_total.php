<?php
include_once '../base.php';

$total = new DB('total');
$row=$total -> find(1);
$row['total']=$_POST['total'];
$total -> save($row);

to("../admin.php?do=total");


?>