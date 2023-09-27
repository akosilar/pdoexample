<?php 
    $host = 'localhost';
    $user = "root";
    $password = "123456";
    $dbname = "pdoposts";

    // set dsn 
    $dsn = 'mysql:host='.$host.';dbname='.$dbname;

    //create a pdo instance
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    // pdo query

    // $stmt = $pdo->query('SELECT * FROM posts');

    // // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // //     echo $row['title'] . '<br>';
    // // }

    // while($row = $stmt->fetch()){
    //     echo $row->title . ' '. $row->body . '<br>';
        
    // }


    //prepared statements (prepare & execute)

    // unsafe
    // $sql = "SELECT * FROM posts WHERE author = '$author'";

    // fetch multiple posts

    //user input
    $author = "mars";

    // positional params
    // $sql = 'SELECT * FROM posts where author = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();
    
    // named params
    $sql = 'SELECT * FROM posts where author = :author';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['author' => $author]);
    $posts = $stmt->fetchAll();

    // var_dump($posts);
    
    foreach ($posts as $post ) {
        echo $post->title . '<br>';
    }
    