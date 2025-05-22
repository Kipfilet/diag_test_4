
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="wrapper">
        <nav>
            <a href="index.php?action=home">Home</a>
            <a href="insert.php?action=toevoegen">Toevoegen</a>
            <a href="restore.php?action=herstellen">Herstellen</a>
        </nav>
        <h1>Onze helden van 1974!</h1>
        <?php 
        //Nieuwe menu trigger met get waarden
        if (isset($_GET["action"]))
        {
            if ($_GET["action"] == "home" )
            {
                include "./core/db_read.php";
            }
            else if ($_GET["action"] == "toevogen")
            {
                include "./pages/insert.php";
            }
            else if ($_GET["action"] == "herstellen")
            {
                include "./pages/restore.php";  
            }
        }
        else
        {
            include "./core/db_read.php";
        }
        ?>
    </div>
</body>
</html>