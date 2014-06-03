<?php

// Composer autoload is already loaded
// require_once 'vendor/autoload.php';

// Benchmark
$time_start = microtime(true);



/* ---------- Formulator ---------- */

$formulator = new ntopulos\formulator\Formulator();
//$formulator->debug_mod = true;


// 1. adding and managing elements

$formulator->addElement('Checkboxes_single', 'InputCheckboxes');

$formulator->addElement('Checkboxes_multiple', 'InputCheckboxes');
$formulator->elements->root->Checkboxes_multiple->options = array('option 1', 'option 2');


$formulator->addElement('InputText');
$formulator->elements->root->InputText->addRule('required')->addRule('between:10,20');

$formulator->addElement('InputEmail', 'InputEmail');
$formulator->elements->root->InputEmail->addRule('required');

$formulator->addElement('InputHidden','InputHidden');

$formulator->addElement('InputPassword', 'InputPassword');
$formulator->elements->root->InputPassword->addRule('required');

$formulator->addElement('Textarea', 'Textarea');
$formulator->elements->root->Textarea->addRule('required');

$formulator->addElement('Radios_single', 'InputRadios');

$formulator->addElement('Radios_multiple', 'InputRadios');
$formulator->elements->root->Radios_multiple->options = array('options A', 'option B');

$formulator->addElement('Select', 'Select');
$formulator->elements->root->Select->options = array('options', 'option 2');
$formulator->elements->root->Select->addRule('required');



// HTML5 new elements

$formulator->addElement('InputColor', 'InputColor');
$formulator->elements->root->InputColor->addRule('required');

$formulator->addElement('InputDate', 'InputDate');
$formulator->elements->root->InputDate->addRule('required');

$formulator->addElement('InputDatetime', 'InputDatetime');
$formulator->elements->root->InputDatetime->addRule('required');

$formulator->addElement('InputDatetimelocal', 'InputDatetimelocal');
$formulator->elements->root->InputDatetimelocal->addRule('required');

$formulator->addElement('InputFile', 'InputFile');
$formulator->elements->root->InputFile->addRule('required');

$formulator->addElement('InputNumber', 'InputNumber');
$formulator->elements->root->InputNumber->addRule('min:10')->addRule('max:12');
$formulator->elements->root->InputNumber->addRule('required');
//$formulator->elements->number->attributes = array('style' => 'background-color: green;');

$formulator->addElement('InputMonth', 'InputMonth');
$formulator->elements->root->InputMonth->addRule('required');

$formulator->addElement('InputTel', 'InputTel');
$formulator->elements->root->InputTel->addRule('required');

$formulator->addElement('InputTime', 'InputTime');
$formulator->elements->root->InputTime->addRule('required');

$formulator->addElement('InputWeek', 'InputWeek');
$formulator->elements->root->InputWeek->addRule('required');

$formulator->addElement('InputRange', 'InputRange');
$formulator->elements->root->InputRange->addRule('between:1,20');
$formulator->elements->root->InputRange->addRule('required');

$formulator->addElement('InputSearch', 'InputSearch');
$formulator->elements->root->InputSearch->addRule('required');

$formulator->addElement('InputUrl', 'InputUrl');
$formulator->elements->root->InputUrl->addRule('required');


$formulator->addElement('Output', 'Output');

//$formulator->addElement('Keygen', 'Keygen');

$formulator->addButton('btn_name', 'reset it!', array(), 'reset');


// 2. Computation

if($formulator->validate()) {
    // if formulator is submitted AND completly valid...
}


// 3 Rendering

echo $formulator->renderTemplate();