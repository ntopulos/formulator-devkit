<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/mysqli.php';

$query = "SELECT * FROM `planets` LIMIT 1";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
 $my_array[] = $row;
}



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->debug_mod = true;
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$options['mytable'] = array(
 'id' =>         array('type'        => 'InputNumber',
                       'rules'       => array('required'),
                       'attributes'  => array('style' => 'background-color: blue')
                     ),
 'birth_date' => array('type' => 'InputDate')
 );
$formulator->addEmptyElementsFromArray($my_array, $options, 'mytable');

// this element is not in mytable but in root
$formulator->addElement('root_element');


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();