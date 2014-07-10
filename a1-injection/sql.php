<!DOCTYPE html>
<html>
  <head>
    <title>SQL Injection</title>
  </head>
  <body>
    <h1>SQL Injection</h1>
    <p>
<?php

mysql_connect('localhost', 'security', 'security');
mysql_select_db('security');

$query = "SELECT *
          FROM   users
          WHERE  username = '{$_GET['username']}'
          AND    password = '{$_GET['password']}'";
$result = mysql_query($query) or exit(mysql_error());

if (mysql_num_rows($result) > 0) {
    echo 'You logged in!' . PHP_EOL;
} else {
    echo 'Login failed' . PHP_EOL;
}

mysql_free_result($result);
mysql_close();
?>
    </p>
    <p><a href="sql.html">Back</a></p>
    <p><a href="index.html">Back to menu</a></p>
  </body>
</html>
