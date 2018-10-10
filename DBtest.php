<?php
$test = mysql_connect('localhost', 'your user name', 'your password');
if (!test) {
die('MySQL Error: ' . mysql_error());
}
echo 'Database connection is working!';
mysql_close($test);
