Updated code from the <a href=https://github.com/tom29793/plaintexteditcounter-mediawiki/>GitHub repository</a>. Output from git:
<?php
shell_exec("git pull https://github.com/tom29793/plaintexteditcounter-mediawiki.git > git-pull-log.txt");
   $lines = file("git-pull-log.txt");
   foreach($lines as $temp)
       echo $temp."</br>";
?>
<a href=/plaintexteditcounter/>Back to main page</a>
