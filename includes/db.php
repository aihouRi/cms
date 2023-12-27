<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'aihou';
$db['db_pass'] = '12345';
$db['db_name'] = 'cms';

foreach($db as $key => $value){
    //define 定义常量
    //strtoupper将小写变大写
    define(strtoupper($key), $value);   
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/* if($connection) {
    echo "We are connected";
} */





?>