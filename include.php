<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>include</title>
  </head>
  <body>
    <?php
/*include file*/
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'comp'; /*folder waar de table in staat*/

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

     ?>
  </body>
</html>
