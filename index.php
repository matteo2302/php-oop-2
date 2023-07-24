<?php
include __DIR__ . '/animal.php';
include __DIR__ . '/item.php';

$dog = new Animal('340g',12.99, null, 'dogs','food');
var_dump($dog);
?>