<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lekpark");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

//var_dump($_GET["svar"]);

if (!isset($_GET["svar"])) {
    echo "det funkade inte";
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
        echo $leksak["namn"];
        echo "<br>";
    }
}

if (!isset($_GET["id2"])){
} else {
     $id2 = $_GET["id2"];
     $svar2 = $_GET["svar2"];
    $sql = "UPDATE attraktioner SET namn='$svar2' WHERE id=$id2";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    $sql = "SELECT * FROM attraktioner";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $leksaker = $stmt->fetchAll();

    foreach ($leksaker as $leksak) {
        echo "<br>";
        echo $leksak["namn"];
        echo "<br>";
    }
}

if (!isset($_GET["id3"])){
} else {
     $id3 = $_GET["id3"];
    $sql = "DELETE FROM attraktioner WHERE id=$id3";

    $stmt = $dbh->prepare($sql);
    $stmt->execute();


    $sql = "SELECT * FROM attraktioner";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $leksaker = $stmt->fetchAll();

    foreach ($leksaker as $leksak) {
        echo "<br>";
        echo $leksak["namn"];
        echo "<br>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Databas</title>
    </head>
    <body>
        <!--        <a href="?kill">kill it</a>-->
        
        <!--lägg till attraktion formulär-->
        <div class="attraktioner">
            Lägg till attraktion
            <form>
                NAMN = <input type="text" name="svar">
                <input type="submit" value="Lägg till"> 
                <input type="hidden" value="Attraktion">
            </form>
            
            
            <!--ändra attraktion formulär-->
            <div class="attraktioner">
                Ändra attraktion
                <form>
                    ID PÅ DET DU VILL ÄNDRA = <input type="number" name="id2">
                    NAMN = <input type="text" name="namn2">
                    <input type="submit" value="Ändra"> 
                    <input type="hidden" value="Attraktion">
                </form>
                
                
                <!--ta bort attraktion formulär-->
                <div class="attraktioner">
                    Ta bort attraktion
                    <form>
                        ID =  <input type="number" name="id3">
                        <input type="submit" value="Ta bort"> 
                        <input type="hidden" value="Attraktion">
                    </form>
                </div>
                </body>
                </html>

