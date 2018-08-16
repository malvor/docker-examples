<?php
    try
    {
        $pdo = new PDO('mysql:host=my-project-mysql;dbname=example_database', 'example_user', 'secret');
        echo 'DB connected';
    }
    catch(PDOException $e)
    {
        echo 'DB error: ' . $e->getMessage();
    }

    $redis = new Redis();
    $redis->connect('my-project-redis', 6379);
    echo "Connection to server sucessfully<br><br>";
    //check whether server is running or not
    echo "Server is running: ".$redis->ping()."<br><br>";

    $memcached = new Memcached;
    $memcached->addServer('my-project-memcached', 11211);
    $memcached->set('int', 99);
    $memcached->set('string', 'a simple string');
    $memcached->set('array', [11, 12]);
    echo '<br>';
    var_dump($memcached->get('int'));
    echo '<br>';
    var_dump($memcached->get('string'));
    echo '<br>';
    var_dump($memcached->get('array'));
    echo '<br>';
    var_dump($memcached->get('object'));