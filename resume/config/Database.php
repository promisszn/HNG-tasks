<?php
    $host = 'localhost';
    $user = 'promise';
    $password = 'promisedan8';
    $dbname = 'contacts';

    // Set DSN
    $dsn ='mysql:host='. $host .';dbname='. $dbname;

    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);