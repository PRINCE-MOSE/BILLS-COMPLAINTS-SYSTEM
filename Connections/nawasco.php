<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_nawasco = "localhost";
$database_nawasco = "nawasco";
$username_nawasco = "root";
$password_nawasco = "";
$nawasco = mysql_pconnect($hostname_nawasco, $username_nawasco, $password_nawasco) or trigger_error(mysql_error(),E_USER_ERROR); 
?>