<?php
$newl ='</br>';
echo "Loaded PHP file.$newl";

// Get dependencies
require 'vendor/autoload.php';
use Noodlehaus\Config;
echo "Got dependencies.$newl";

// Get database config file and populate db username and password variables from it
$conf = new Config('https://en.wikipedia.org/w/api.php?action=query&format=json&list=users&usprop=editcount&ususers=tom29739');
$editcount = $conf['query']['users']['editcount'];

echo "Got config.$newl";
echo $editcount.$newl;
echo "Echoed data.$newl";
?>
