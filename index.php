<?php

// Configuration
require_once 'ressources/config.php';
// Composer autoload
require_once 'vendor/autoload.php';


// Folders listing
$dir = 'pages';
$ignore = array(
                '.',
                '..'
                );

$folder = array_diff(scandir($dir), $ignore);
natcasesort($folder);

$html_dirs = '';
foreach($folder as $key => $file) {
    if(is_dir($dir)) {
        $html_dirs .= '<li><a href="/'.$dir.'/">'.$dir.'</a></li>';
    }
}

$nav = $folder;

// Current page
$current_page = (isset($_GET['page']) ? $_GET['page'] : 'index.php');


// Rendering
ob_start();
require $dir.'/'.$current_page;
$content = ob_get_clean();

// source

$source = file_get_contents($dir.'/'.$current_page);
$source = str_replace('<?php', '', $source);
$source = str_replace('?>;', '', $source);
// Into buffer
ob_start();
require 'ressources/layout.php';
echo ob_get_clean();