
<?php

// 検索した文字を受け取る処理が必要
// 画面になにか出す→やることは、
// 1.dbからデータを取得
// 　1,dbの接続
// 　2,SQLを実行
//     -データを取得するSQL
//      -タイトルに検索した文字を含むデータを取得したい（index.phpの検索機能の下にaria~追加）
    
// 2,取得したデータを画面に表示する 




//ファイルの読み込み
require_once('Models/Task.php');


$tasks = $todo->getAll();
$title = $_GET['title'];

// var_dump($title);
// die;


//sql実行
$stmt = $dbh->prepare('SELECT * FROM todo3 WHERE title like ?');
// ↓文字が何かっていうのを表している%
$stmt->execute(["%$title%"]);
$results = $stmt->fetchAll();
?>