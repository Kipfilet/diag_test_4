<?php
include "./core/db_connect.php";

$sql = "SELECT `foto_url`, `id`, `voornaam`, `achternaam`, `geboortedatum` FROM voetballers";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1'>";
        echo "<th> Voornaam: </th>" . "<th> Achternaam: </th>" . "<th> Geboortedatum: </th>" . "<th> Aanpassen: </th>" . "<th> Delete: </th>";    
  while($row = mysqli_fetch_assoc($result)) {


    echo "<tr>";

    echo "<td>" . $row['foto_url'] . "</td>";
    echo "<td>" . $row['voornaam'] . "</td>";
    echo "<td>" . $row['achternaam'] . "</td>";
    echo "<td>" . $row['geboortedatum'] . "</td>";
    echo "<td> <a href='update.php?id=" . $row['id'] . "'>Aanpassen</a> </td>";
    echo "<td> <a href='delete.php?id=" . $row['id'] . "'>Delete</a> </td>";	    
    
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}


?>