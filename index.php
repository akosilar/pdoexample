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

    //inserting data

    // $title = 'WHY DONT U';
    // $author = 'Klars';
    // $body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut delectus deserunt blanditiis, cupiditate debitis, officia beatae voluptatibus, soluta eveniet iusto est repellat ratione. Nisi reprehenderit minus provident facilis tempora fugiat.';
    // $is_published = 1;

    // $sql = 'INSERT INTO posts (title, author, body,is_published) VALUES (:title, :author,:body,:is_published)';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title' => $title, 'author' => $author, 'body' => $body, 'is_published' => $is_published]);


    // // updating data
    // $author = 'Jan Sars';

    // $sql = 'UPDATE posts SET author = :author WHERE id = 4';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author'=>$author]);

    // deleting data
    // $id = 1;

    // $sql = 'DELETE FROM posts WHERE id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id' => $id]);

    //search data
    $search = "%dolor%";

    $sql ='SELECT * FROM posts WHERE body LIKE :search';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['search' => $search]);
    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        echo $post->id . '<br>';
    }