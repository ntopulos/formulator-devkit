<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
$formulator->auto_placeholders = true;


// 1. adding and managing elements

$formulator->addElement('Checkboxes_single', 'InputCheckboxes');

$formulator->addElement('Checkboxes_multiple', 'InputCheckboxes');
$formulator->elements->root->Checkboxes_multiple->options = array('option 1', 'option 2');


$formulator->addElement('InputText');
$formulator->elements->root->InputText->addRule('required')->addRule('between:10,20');

$formulator->addElement('InputEmail', 'InputEmail');

$formulator->addElement('InputHidden','InputHidden');

$formulator->addElement('InputPassword', 'InputPassword');

$formulator->addElement('Textarea', 'Textarea');

$formulator->addElement('Radios_single', 'InputRadios');

$formulator->addElement('Radios_multiple', 'InputRadios');
$formulator->elements->root->Radios_multiple->options = array('options A', 'option B');

$formulator->addElement('Select', 'Select');
$formulator->elements->root->Select->options = array('options', 'option 2');



// HTML5 new elements

$formulator->addElement('InputColor', 'InputColor');

$formulator->addElement('InputDate', 'InputDate');

$formulator->addElement('InputDatetime', 'InputDatetime');

$formulator->addElement('InputDatetimelocal', 'InputDatetimelocal');

$formulator->addElement('InputFile', 'InputFile');

$formulator->addElement('InputNumber', 'InputNumber');
$formulator->elements->root->InputNumber->addRule('min:10')->addRule('max:12');
//$formulator->elements->number->attributes = array('style' => 'background-color: green;');

$formulator->addElement('InputMonth', 'InputMonth');

$formulator->addElement('InputTel', 'InputTel');

$formulator->addElement('InputTime', 'InputTime');

$formulator->addElement('InputWeek', 'InputWeek');

$formulator->addElement('InputRange', 'InputRange');
$formulator->elements->root->InputRange->addRule('between:1,20');

$formulator->addElement('InputSearch', 'InputSearch');

$formulator->addElement('InputUrl', 'InputUrl');


$formulator->addElement('Output', 'Output');

//$formulator->addElement('Keygen', 'Keygen');

$formulator->addButton('nom', 'ManReset', array(), 'reset');


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();