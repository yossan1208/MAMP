<?php

mb_internal_encoding("utf-8");

$errors = [];

$handlename = trim($_POST['handlename'] ?? '');
$title      = trim($_POST['title'] ?? '');
$comments   = trim($_POST['comments'] ?? '');


if($handlename === '') {
    $errors['handlename'] = 'ハンドルネームが入力されていません。';
}
if($title === '') {
    $errors['title']      = 'タイトルが入力されていません。';
}
if($comments === '') {
    $errors['comments']   = 'コメントが入力されていません。';
}


if (!empty($errors)) {
    include 'index.php';
    exit;
} else {
    $pdo = new PDO("mysql:dbname=practice; host=localhost;", "root", "root");
    $pdo -> exec("insert into diworks_keijiban(handlename, title, comments)values('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."');");
}

header("Location:http://localhost/diworks_keijiban/index.php");

// ?>