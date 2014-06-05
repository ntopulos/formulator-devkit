<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/mysqli.php';

$query = 'SELECT * FROM `all_data_types`';
$result = $mysqli->query($query);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->auto_placeholders = true;


// 1. adding and managing elements

// edited element
$options['all_data_types']['type_tinyint']['attributes'] = array('style' => 'background: orange');
$options['all_data_types']['type_varchar']['type'] = 'InputDate';
//$options['all_data_types']['type_varchar']['ignore'] = true;
$formulator->addElementsFromQueryObject($result, $options);

// manually adding an element
$formulator->addElement('name', 'InputText');


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();