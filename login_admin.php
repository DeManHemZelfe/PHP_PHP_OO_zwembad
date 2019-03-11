<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 31-1-2019
 * Time: 11:43
 */


?><a href='index.html'>Terug naar de homepage</a><br><br>
<?php

$servername = "localhost";
$username = "niels";
$password = "1234";
//$bestuurder = $_POST['bestuurder'];
//$voornaam = $_POST['voornaam'];
$voornaam_admin = $_POST['voornaam_admin'];
//$achternaam = $_POST['achternaam'];
$achternaam_admin = $_POST ['achternaam_admin'];
$wachtwoord = $_POST ['wachtwoord'];
//$mail = $_POST['mail'];
//$telefoon = $_POST['telefoon'];

//try {
//    $conn = new PDO("mysql:host=$servername;dbname=databse_test_auto", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    foreach ($conn->query('SELECT * from bestuurder WHERE  ')as $row) {
//        print_r($row);
//    }
//    echo "GELUKT, WE HEBBEN CONNECTIE";
//}
//
//catch(PDOException $e)
//{
//    echo "HELAAS, ER IS IETS VERKEERDS GEGAAN: " . $e->getMessage();
//}
//

if ($voornaam_admin == 'niels' and $achternaam_admin == 'martens' and $wachtwoord == '1234'
    or die('U heeft een fout gemaakt tijdens het invullen van uw gegevens.'))
{
    $dbc = mysqli_connect($servername, $username, $password, 'database_zwembad') or die ('Error connecting.');

    $query = "SELECT * FROM gebruikers
INNER JOIN kaartaanschaf
ON gebruikers.gebruikers_id = kaartaanschaf.gebruikers_id
INNER JOIN kaartsoorten
ON kaartaanschaf.kaartaanschaf_id = kaartsoorten.kaartsoorten_id";

    $result = mysqli_query($dbc, $query) or die ('Fout op of na regel 46.');
//    $count = mysqli_num_rows($result);?>
    <table class="table_bestuurder" border="1">
        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            printf ("%s (%s)\n", $row["gebruikers_id"], $row["voornaam"], $row["achternaam"], $row["mail"]);?>
            <tr>
                <td class="td_table_id"><?php echo $row['gebruikers_id']; ?></td>
                <td class="td_table_naam"><?php echo $row['voornaam']; ?></td>
                <td class="td_table_naam"><?php echo $row['achternaam']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td class="td_table_telefoon"><?php echo $row['kaartsoorten_id']; ?></td>
                <td class="td_table_auto"><?php echo $row['naam']; ?></td>
                <td class="td_table_auto"><?php echo $row['prijs']; ?></td>
                <td class="td_table_wielen"><?php echo $row['kaartaanschaf_id']; ?></td>
                <td class="td_table_goedgekeurd"><?php echo $row['']; ?></td>
            </tr>
            <?php

  } ?>
    </table>
    <?php

}


?>

<style>
    .table_bestuurder {
        padding: 2px;
        border-spacing: 5px;
    }
    td {
        background-color: pink;
    }
    .table_auto {
        padding: 2px;
        border-spacing: 5px;
    }
    .td_table_auto {
        background-color: red;
    }
    .td_table_naam {
        background-color: aqua;
    }
    .td_table_id {
        background-color: black;
        color: #f9f9f9;
    }
    .td_table_wielen {
        background-color: greenyellow;
    }
    .td_table_goedgekeurd {
        background-color: blue;
    }
    .td_table_telefoon {
        background-color: aquamarine;
    }
</style>







<!---->
<!--$dbc = mysqli_connect('localhost','niels','1234','databse_test_auto') or die ('Error connecting.');-->
<!--echo 'Gelukt!';-->
<!---->
<!---->


<!--$sql = "SELECT * FROM auto-->
<!--INNER JOIN autobestuurder ON auto.auto_id = autobestuurder.auto_id-->
<!--INNER JOIN bestuurder ON bestuurder.bestuurder_id = autobestuurder.bestuurder_id-->
<!--WHERE bestuurder.bestuurder_id = 2)";-->
<!--echo 'Gelukt met auto!';-->
<!---->
<!--echo $query-->











<!--//$servername = "localhost";-->
<!--//$username = "username";-->
<!--//$password = "password";-->
<!--//-->
<!--//// Create connection-->
<!--//$conn = new mysqli($servername, $username, $password);-->
<!--//-->
<!--//// Check connection-->
<!--//if ($conn->connect_error) {-->
<!--//    die("Connection failed: " . $conn->connect_error);-->
<!--//}-->
<!--//echo "Connected successfully";-->
<!--?>-->



<!--SELECT * FROM auto-->
<!--INNER JOIN autobestuurder ON auto.auto_id = autobestuurder.auto_id-->
<!--INNER JOIN bestuurder ON bestuurder.bestuurder_id = autobestuurder.bestuurder_id-->
<!--WHERE bestuurder.bestuurder_id = 2;-->