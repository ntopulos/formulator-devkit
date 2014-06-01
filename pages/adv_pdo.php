<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/pdo-mysql.php';

$query = "SELECT * FROM `planets` LIMIT 2";
//$query = "SELECT * FROM `planets` , `moons` WHERE id = person";
$stmt = $dbh->prepare($query);
$stmt->execute();



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->debug_mod = true;
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$options = array();
$options['all_data_types']['type_varchar']['attributes'] = array('style' => 'background: red');
$options['all_data_types']['type_varchar']['type'] = 'InputDate';
//$options['all_data_types']['type_varchar']['ignore'] = true;

$formulator->addElementsAdvanced($stmt, $dbh, $options);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();