<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->debug_mod = true;


// 1. adding and managing elements

$formulator->addElement('name');
$formulator->elements->root->name->addRule('required')->addRule('between:10,20');

$formulator->addElement('age');
$formulator->elements->root->age->label = 'Your age';
$formulator->elements->root->age->addRule('required')->addRule('min:20')->addRule('max:30');


// 2nd syntax to add rules
$rules = array(
    'required',
    'email'
    );
$formulator->addElement('email');
$formulator->elements->root->email->addRules($rules);


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();