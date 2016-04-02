Pulled from the <a href=https://github.com/tom29793/plaintexteditcounter-mediawiki/>GitHub repository</a>. Output from git:
<?php
shell_exec("git pull origin master > git-pull-log.txt");
   $lines = file("git-pull-log.txt");
   foreach($lines as $temp)
       echo $temp."</br>";
?>
<a href=/plaintexteditcounter/>Back to main page</a>
