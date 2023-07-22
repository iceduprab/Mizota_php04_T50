<?php
// セッションを利用します
session_start();

$name = 'みぞた';
$age = '18';
echo $name . $age;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;

$id = session_id();
echo $id;