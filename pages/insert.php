<form method="POST">

    <label>Voornaam: </label><input type="text" name="Voornaam" placeholder="Invoer Voornaam"> <br><br>
    <label>Achternaam: </label><input type="text" name="Achternaam" placeholder="Invoer Achternaam"> <br><br>
    <label>Geboortedatum: </label><input type="date" name="Geboortedatum"> <br><br>
    <label>Foto URL: </label><input type="text" name="Foto" placeholder="Invoer Foto"> <br><br>
    <input type="submit" name="Update" value="Voeg voetballer toe">

</form>
<?php
include "./core/db_connect.php";

if (isset($_POST["Update"])) {
    $Voornaam = $_POST["Voornaam"];
    $Achternaam = $_POST["Achternaam"];
    $Geboortedatum = $_POST["Geboortedatum"];
    $Foto = $_POST["Foto"];
    $insert_sql = "INSERT INTO `voetballers`( `voornaam`, `achternaam`, `geboortedatum`) VALUES ('$Voornaam','$Achternaam','$Geboortedatum')";
    $insert = mysqli_query($con, $insert_sql);
    header("Location: index.php");
}
//$ins_sql = "INSERT INTO `voetballers`( `voornaam`, `achternaam`, `geboortedatum`) VALUES ('$Voornaam','$Achternaam','$Geboortedatum')";
//$insert = mysqli_query($con, $ins_sql);





?>
