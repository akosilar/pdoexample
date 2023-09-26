<?php 
    $host = 'localhost';
    $user = "root";
    $password = "123456";
    $dbname = "pdoposts";

    // set dsn 
    $dsn = 'mysql:host='.$host.';dbname='.$dbname;

    //create a pdo instance
    $pdo = new PDO($dsn,$user,$password);

    // pdo query

    $stmt = $pdo->query('SELECT * FROM posts');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['title'] . '<br>';
    }