<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->debug_mod = true;
$formulator->rows = 3;


// 1. adding and managing elements

$formulator->addElement('name', 'InputText');
$formulator->addElement('birthdate', 'InputDate');

$rule = 'required';
$rule = array('length_min' => 3);

$formulator->elements->root->name->addRule($rule);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();