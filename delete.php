<?php
//DELETEボタン後のページ（削除後トップにリダイレクト）

require_once('Models/Task.php');

$id = $_POST['id'];

//var_dump($id);die;


$task = new Task();
$task->delete([$id]);

header("location:index.php");
exit;