<?php

require_once('dbconnect.php');

class Model
{
    // プロパティ
    protected $table;
    protected $db_manager;

    // インスタンス化した時に呼ばれるメソッド
    public function __construct()
    {
        // db_managerプロパティは、
        // DbManagerクラスのインスタンス
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    // DBからデータを全て取得するメソッド
    public function getAll()
    {
        // 実行するSQLを準備
        // $this === このクラスのインスタンス
        // db_manager
        // このクラスのインスタンスのプロパティ
        // DbManagerクラスのインスタンス
        // dbh
        // db_managerのプロパティ
        // PDOクラスのインスタンス
        // prepare
        // dbhのメソッド
        // PDOインスタンスのメソッド
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);

        // $dbh === PDOクラスのインスタンス
        // $dbh->prepare('SELECT * FROM ' . $this->table);

        // 準備したSQLを実行する
        $stmt->execute();

        // 実行結果を取得
        $tasks = $stmt->fetchAll();

        // return === 関数の呼び出し元に、値を返す
        return $tasks;
    }

}
