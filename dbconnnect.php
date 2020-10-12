<?php

    try {
        $db= new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8',
        'root','root');
        echo "DBに接続しました\n";
    } catch(PDOException $e){
        echo 'DB接続エラー:'.$a->getMessage(); 
    }