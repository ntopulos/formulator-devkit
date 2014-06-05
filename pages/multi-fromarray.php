<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);


// Database interaction
require_once 'ressources/mysqli.php';

$query = "SELECT * FROM `planets`";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
    $my_array[] = $row;
}



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$options['mytable'] = array(
 'id' =>         array('type'        => 'InputNumber',
                       'rules'       => array('required'),
                       'attributes'  => array('style' => 'background-color: blue')
                     ),
 'last_seen' => array('type' => 'InputDate')
 );
$formulator->addElementsFromArray($my_array, $options, 'mytable');

// this element is not in mytable but in root
$formulator->addElement('root_element');
$formulator->elements->root->root_element->default_value = 'defaul general';


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();