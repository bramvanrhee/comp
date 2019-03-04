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
        <form action="index.php" method="post">
          <input type="text" name="Datum" placeholder="Datum" >
          <input type="text" name="Clubs" placeholder="Clubs" >
          <input type="text" name="Eind" placeholder="Eind stand" >
          <input type="text" name="ID" placeholder="ID" >
        </form>
      </div><br>

          <?php
          error_reporting(1);
           $datum = $_POST['Datum'];
           $Clubs = $_POST['Clubs'];
           $Eind= $_POST['Eind'];
           $ID= $_POST['ID'];




          $sql = "SELECT ID,Datum,Clubs FROM `wedstrijden`"; /*pakt de opties uit de tabel*/
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<table><tr><td><h5>ID</h5></td><td><h5>Datum</h5></td><td><h5>clubs</h5></td><td><h5>Eind stand</h5></td></tr>"; /*echo de top rij met opties (zo als naam num artiest)*/

            while($row = $result->fetch_assoc()) {
            echo "<tr><td><h5>".$row['ID']."</h5></td><td><h5>".$row['Datum']."</h5></td>
            <td><h5>".$row['Clubs']."</h5></td></tr>"; /*echo de info*/
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
