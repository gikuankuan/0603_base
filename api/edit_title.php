<?php
include_once '../base.php';

$title = new DB('title');
foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $title->del($id);
    } else {
        $row=$title->find($id);
        $row['text']=$_POST['text'][$key];
        $row['sh']=($_POST['sh']==$id)?1:0;
        $title->save($row);
    }
}

to("../admin.php?do=title");


?>