<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lekpark");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

//var_dump($_GET["svar"]);
//<!--lägg till attraktion formulär-->
if (!isset($_GET["svar"])) {
    
} else {
    $svar = $_GET["svar"];
    $sql = "INSERT INTO attraktioner(id, namn) VALUES ('','$svar')";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    $sql = "SELECT * FROM attraktioner";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $leksaker = $stmt->fetchAll();

    foreach ($leksaker as $leksak) {
        echo "<br>";
        echo $leksak["id"];
        echo " ";
        echo $leksak["namn"];
        echo "<br>";
    }
}


//ändra attraktionen
if (!isset($_GET["id2"])) {
    
} else {
    $id2 = $_GET["id2"];
    $svar2 = $_GET["namn2"];
    $sql = "UPDATE attraktioner SET namn='$svar2' WHERE id=$id2";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    $sql = "SELECT * FROM attraktioner";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $leksaker = $stmt->fetchAll();

    foreach ($leksaker as $leksak) {
        echo "<br>";
        echo $leksak["id"];
        echo " ";
        echo $leksak["namn"];
        echo "<br>";
    }
}


//ta bort en attraktion
if (!isset($_GET["action"])) {
    
} else {
    $id = $_GET["id"];
    $sql = "DELETE FROM attraktioner WHERE id=$id";


    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    $sql = "SELECT * FROM attraktioner";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $leksaker = $stmt->fetchAll();

    foreach ($leksaker as $leksak) {
        echo "<br>";
        echo $leksak["id"];
        echo " ";
        echo $leksak["namn"];
        echo "<br>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="register.css">
        <title>Databas</title>
    </head>
    <body>
        <!--        <a href="?kill">kill it</a>-->

        <!--lägg till attraktion formulär-->
        <div class="attraktioner">
            Lägg till attraktion
            <form>
                NAMN = <input type="text" name="svar">
                <input class="knapp" type="submit" value="Lägg till"> 
                <input type="hidden" value="Attraktion">
            </form>


            <!--ändra attraktion formulär-->
            <div class="attraktioner">
                Ändra attraktion
                <form>
                    ID PÅ DET DU VILL ÄNDRA = <input type="number" name="id2">
                    NYTT NAMN = <input type="text" name="namn2">
                    <input class="knapp" type="submit" value="Ändra"> 
                    <input type="hidden" value="Attraktion">
                </form>


                <!--ta bort attraktion formulär-->
                <div class="attraktioner">
                    Ta bort attraktion
                    <br>
                    VÄLJ ATTRAKTION 
                    <form>
                        <select name="id">
                            <!--                        <option value="volvo">-->
                            <?php
                            $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

                            $stmt = $dbh->prepare($sql);
                            $stmt->execute();

                            $sql = "SELECT * FROM attraktioner";
                            $stmt = $dbh->prepare($sql);
                            $stmt->execute();

                            $leksak = $stmt->fetchAll();


                            foreach ($leksak as $namn) {
                                echo "<option value=" . $namn["id"] . ">" . $namn["namn"] . "</option>";
                                echo "<br>";
                            }
                            ?>
                        </select>
                        <input class="knapp" type="submit" value="Delete" name="action">
                        <input type="hidden" value="Attraktion">
                    </form>
                    <!--                    <form>
                                            <
                                            ID =  <input type="number" name="id3">
                                            <input type="submit" value="Ta bort"> 
                                            <input type="hidden" value="Attraktion">
                                        </form>-->
                </div>
                </body>
                </html>

