<form method="POST">

    <label>Voornaam: </label><input type="text" name="Voornaam" placeholder="Invoer Voornaam"> <br><br>
    <label>Achternaam: </label><input type="text" name="Achternaam" placeholder="Invoer Achternaam"> <br><br>
    <label>Geboortedatum: </label><input type="date" name="Geboortedatum"> <br><br>
    <label>Foto URL: </label><input type="text" name="Foto" placeholder="Invoer Foto"> <br><br>
    <input type="submit" name="Update" value="Wijzig voetballer">

</form>
<?php

include "./core/db_connect.php";

if (isset($_POST["Update"])) {
    $Voornaam = $_POST["Voornaam"];
    $Achternaam = $_POST["Achternaam"];
    $Geboortedatum = $_POST["Geboortedatum"];
    $id = $_GET["id"];
    $update_sql = "UPDATE voetballers SET voornaam = '$Voornaam', achternaam= '$Achternaam', geboortedatum = '$Geboortedatum' WHERE id = $id;";
    $update = mysqli_query($con, $update_sql);
    if (isset($update)) {
        header("Location: index.php");
    } else {
        echo "Er is iets fout gegaan!";
        echo $update;
    }
    
}

?>
