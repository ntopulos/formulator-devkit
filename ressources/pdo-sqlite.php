<?php

try {
    $dbh = new PDO("sqlite:ressources/database.sqlite");
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    die($e->getMessage());
}
