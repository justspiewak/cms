<?php
    const DB_HOST = 'db_host';
    const DB_USER = 'db_user';
    const DB_PASS = 'db_pass';
    const DB_NAME = 'db_name';

    $db = [
        DB_HOST => 'localhost',
        DB_USER => 'root',
        DB_PASS => '',
        DB_NAME => 'cms',
   ];
   
    $connection =  mysqli_connect($db[DB_HOST], $db[DB_USER], $db[DB_PASS], $db[DB_NAME]);
    // if ($connection){
    //     echo 'We are connected';
    // } else {
    //     die(mysqli_connect_error());
    // }
