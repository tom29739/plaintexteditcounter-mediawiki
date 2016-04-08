<?php

ini_set("user_agent", 'https://tools.wmflabs.org/plaintexteditcounter - any problems please tell tom29739 at https://en.wikipedia.org/User:Tom29739');

// bomb out early if no username specified
if (!isset($_GET['username'])) {
    echo "No username specified!";
    return;
}

// get the API result as a JSON string
$json = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&format=json&list=users&usprop=editcount&ususers=" . htmlspecialchars($_GET["username"]));

// decode the JSON in to an associative array (second parameter enforces array rather than object)
$conf = json_decode($json, true);

// Use isset() to check if something is set - that way you don't get PHP Notices
if (!isset($conf['query']['users']['0']) || isset($conf['query']['users']['0']['missing'])) {
    echo "The user '" . htmlspecialchars($_GET["username"]) . "' does not exist.";
} else {
    echo $conf['query']['users']['0']['editcount'];
}
