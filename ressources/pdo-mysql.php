<?php

try {
    $dbh = new PDO("mysql:
                    host=$mysql[host];
                    dbname=$mysql[db]",
                    $mysql['user'],
                    $mysql['pass']);
}
catch(PDOException $e) {
    die($e->getMessage());
}
