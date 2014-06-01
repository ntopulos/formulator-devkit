<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/mysqli.php';

$query = "SELECT * FROM `planets` LIMIT 2";
//$query = "SELECT * FROM `people` , `pets` WHERE id = person";
$result = $mysqli->query($query);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->debug_mod = true;
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$options['all_data_types']['type_varchar']['attributes'] = array('style' => 'background: red');
$options['all_data_types']['type_varchar']['type'] = 'InputDate';

$formulator->addElementsAdvanced($result, $mysqli, $options);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();