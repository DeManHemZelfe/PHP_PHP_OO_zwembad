<?php
?><a href='index.html'>Terug naar de homepage</a><br><br>
<?php

$servername = "localhost";
$username = "niels";
$password = "1234";
//$bestuurder = $_POST['bestuurder'];
$voornaam = $_POST['voornaam'];
//$voornaam_admin = $_POST['voornaam_admin'];
$achternaam = $_POST['achternaam'];
//$achternaam_admin = $_POST ['achternaam_admin'];
//$wachtwoord = $_POST ['wachtwoord'];
$email = $_POST['email'];
//$telefoon = $_POST['telefoon'];
$kaartsoort = $_POST['kaartsoort'];

/**
 * Created by PhpStorm.
 * User: niels
 * Date: 15-2-2019
 * Time: 09:53
 */

echo 'Uw ingevoerde gegevens:<br>';
echo $voornaam . '<br>';


$dbc = mysqli_connect($servername, $username, $password, 'database_zwembad') or die ('Error connecting.');

$query = "SELECT * FROM voornaam";

$result = mysqli_query($dbc, $query) or die ('Fout op of na regel 28.');
echo [$query];
