<?php

include "./core/db_connect.php";

$id = $_GET["id"];

$delete_sql = "DELETE FROM voetballers WHERE id = $id";

$delete = mysqli_query($con, $delete_sql);

header("Location: index.php");


?>