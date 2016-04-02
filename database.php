<?php
require 'vendor/autoload.php';
use Noodlehaus\Config;
$username = htmlspecialchars($_GET["username"]);
$json = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&format=json&list=users&usprop=editcount&ususers=".$username);
file_put_contents('json.json',$json);
$conf = new Config('json.json');
$array = $conf['query']['users'];
echo $array['0']['editcount'];
?>
