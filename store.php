<?php
//このページは、新規作成のページ(create)で何か書いてpostボタンを押したときのページ
//(でも最後にリダイレクトするから、一覧ページ(index)に行く)


//やること
//データの受け取り。
// DBに保存（dbconnect.phpに接続するのが書いてるから持ってくる）
// 一覧ページにリダイレクト




// データの受け取り
//名前
$title = $_POST['title'];

//詳細
 $contents = $_POST['contents'];
//中身確認
//  var_dump($contents);
//  die;



//DBに保存
//まずデータベースに接続（dbconnect.phpに接続するのが書いてるから持ってくる）
require_once('dbconnect.php');
//！！！ここ微妙！！！SQL（データベースを管理する言語）の実行をする
$stmt = $dbh->prepare('INSERT INTO tasks (title, contents) VALUES (?, ?)');  //準備
$stmt->execute([$title, $contents]); //?を変数に置き換えてSQLを実行



//リダイレクト
header('Location: index.php');