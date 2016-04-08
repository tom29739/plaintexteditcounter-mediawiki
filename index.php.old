<?php
require 'vendor/autoload.php';
use Noodlehaus\Config;

//if (htmlspecialchars($_GET["username"]) === "") {
//	echo 'Please supply a username with the \'username=\' parameter.'
//generate random slug
function genRandomString($length=10,$characters = '0123456789abcdefghijklmnopqrstuvwxyz',$string = '') {
   for ($p = 0; $p < $length; $p++) {
       $string .= $characters[mt_rand(0, strlen($characters))];
   }

   return $string; } 

//store slug into variable
$slug = genRandomString('5');
$file = '/tmp/'.$slug.'.json';
ini_set("user_agent",'https://tools.wmflabs.org/plaintexteditcounter - any problems please tell tom29739 at https://en.wikipedia.org/User:Tom29739');
$json = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&format=json&list=users&usprop=editcount&ususers=".htmlspecialchars($_GET["username"]));
file_put_contents($file,file_get_contents("https://en.wikipedia.org/w/api.php?action=query&format=json&list=users&usprop=editcount&ususers=".htmlspecialchars($_GET["username"])));
$conf = new Config($file);
$array = $conf['query']['users'];
if ($array['0']['missing'] === "") {
	echo "The user '".$array['0']['name']."' does not exist.";
}
else {
echo $array['0']['editcount'];
}
unlink($file);
?>
