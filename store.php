<?php
//このページは、新規作成のページ(create)で何か書いてpostボタンを押したときのページ
//(最後にリダイレクトするから、一覧ページ(index)に行く)


//やること
//データの受け取り。
// DBに保存
// 一覧ページにリダイレクト


//ファイル読み込み(データベースに接続されるのも書いてる)
require_once('Models/Task.php');



// データの受け取り
//名前
$title = $_POST['title'];

//詳細
 $contents = $_POST['contents'];

//日付を取ってくる関数？
 $currentTime = date("Y/m/d H:i:s");
//   var_dump($currentTime);
//   die;



//DBに保存
$task = new Task();
$task->create([$title, $contents,$currentTime]);


//リダイレクト
header('Location: index.php');
exit;