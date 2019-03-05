<?php include_once('include.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>clubs</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>wedstrijden</h1>
      <div class="form">


          <?php
          error_reporting(1);
           $Datum = $_POST['Datum'];
           $Clubs = $_POST['Clubs'];
           $Eind = $_POST['Eind'];
           $ID = $_POST['ID'];
           $Stuur = $_POST['Stuur'];
           $Update = $_POST['Update'];
           $Delete = $_POST['Delete'];


                  $sql = "SELECT ID,Datum,Clubs,Score FROM `wedstrijden`"; /*pakt de opties uit de tabel*/
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    echo "<table><tr><td><h5>ID</h5></td><td><h5>Datum</h5></td><td><h5>clubs</h5></td><td><h5>Eind stand</h5></td></tr>"; /*echo de top rij met opties (zo als naam num artiest)*/

                    while($row = $result->fetch_assoc()) {

                    echo "<h1>".$row['Clubs']."</h1>";
                    echo "<h2>".$row['Score']."</h2>";
                    echo "<tr><td><h5>".$row['ID']."</h5></td><td><h5>".$row['Datum']."</h5></td>
                    <td><h5>".$row['Clubs']."</h5></td><td><h5>".$row['Score']."</h5></td></tr>"; /*echo de info*/
                      }
                      echo "</table>";
                      }
                     else
                     {
                      echo "geen resultaten";
                     }
           ?>
  </body>
</html>
