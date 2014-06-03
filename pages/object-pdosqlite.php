<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/pdo-sqlite.php';

$query = "SELECT * FROM `testtable` LIMIT 1";
$stmt = $dbh->prepare($query);
$stmt->execute();



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
//$formulator->debug_mod = true;
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$formulator->addElementsFromQueryObject($stmt);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();