<?php
 header('Status: 301 Moved Permanently', false, 301);
 header('Location: http://10.25.220.207/home/test/GDProject/Hiscores.php');

 $link = mysql_connect('localhost', 'root', 'root');
 if(!$link) {
 	die('Database server unavalaible ' . mysql_error());
 }

 $db = mysql_select_db('GDProject', $link);
 if(!$db) {
 	die('GDProject database unavalaible ' . mysql_error());
 }
 
 $sql = "INSERT INTO
(score)
VALUES('$_POST[gname]','$_POST[gtimetoend]','$_POST[gdeaths]','$_POST[gfire]','$_POST[genergy]','$_POST[goxygen]','$_POST[score]')";

 echo $sql . "<br />";

 mysql_query($sql,$link) or die(mysql_error());

 echo mysql_insert_id();
 
 mysql_close($link);
 



 exit();

?>