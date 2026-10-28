<?php

    $db_host = getenv('DB_HOST') ?: 'localhost';
    $db_database = getenv('DB_NAME') ?: 'liu_community_db';
    $db_name = 'mysql:host='.$db_host.';dbname='.$db_database;
    $user_name = getenv('DB_USER') ?: 'root';
    $user_password = getenv('DB_PASSWORD') ?: '';

    $conn = new PDO($db_name,$user_name,$user_password); 


?>