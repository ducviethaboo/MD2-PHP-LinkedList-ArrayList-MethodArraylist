<?php
include_once 'MyList.php';
$list = new MyList();
$list->add(10);
$list->add(15);
$list->add(20);
$list->add(1);
$list->add(2);
$list->add(23);
$list->insert(3, 15);
$list->insert(6, 19);
echo "<pre>";
$list->addAll([1,2,3,4]);
var_dump($list->sort());
