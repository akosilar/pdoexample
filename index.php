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
    $author = "sars";
    $is_published = true;
    $id = 2;

    // positional params
    // $sql = 'SELECT * FROM posts where author = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();
    
    // named params
    // $sql = 'SELECT * FROM posts where author = :author && is_published = :is_published';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
    // $posts = $stmt->fetchAll();

    // var_dump($posts);
    

    
    // fetch single post
    // $sql = 'SELECT * FROM posts';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $posts = $stmt->fetch();

    // foreach ($posts as $post ) {
    //     echo $post . '<br>';
    // }

    //get row count
    // $sql = 'SELECT * FROM posts';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $posts = $stmt->rowCount();

    // echo $posts;