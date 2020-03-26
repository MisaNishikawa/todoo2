<?php

//使用していません

require_once('Model.php');

class User extends Model
{
    protected $table = 'users';

    // ユーザーを新規作成するメソッド
    public function create($data)
    {

    }

    // emailをもとにユーザーを取得するメソッド
    public function findByEmail($data)
    {
    }
}
