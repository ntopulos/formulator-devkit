<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$closure = function ($v, $p) {
    return ($v % 2 == 0 and $v > $p);
};

$formulator->registerRule('myrule', $closure, 'Must be even and greater than %0.');
$formulator->addElement('name', 'InputText');
$formulator->elements->root->name->addRule('myrule:20');





$formulator->addElement('equal');
$formulator->elements->root->equal->addRule('equal:2');


unset($formulator->elements->root->equal);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();