<?php

$pdo = require_once 'connect.php';

$Zilverenkruisnummer = $_POST['Zilverenkruisnummer'];
$Voornaam = $_POST['Voornaam'];
$Tussenvoegsel = $_POST['Tussenvoegsel'];
$Achternaam = $_POST['Achternaam'];
// $Geboortedatum = $_POST['Geboortedatum'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$Bijzonderheden = $_POST['Bijzonderheden'];

$idArts = $_POST['idArts'];

$time = strtotime($_POST['Geboortedatum']);

$Geboortedatum = date('Y-m-d',$time);




$sql = 'INSERT INTO patient(Zilverenkruisnummer,Voornaam,Tussenvoegsel, Achternaam, Geboortedatum, Email, Telefoonnummer, Bezonderheden, Arts_idArts, Apotheek_idApotheek, Apotheek_Verzekeraar_idVerzekeraar) 
VALUES(:Zilverenkruisnummer,:Voornaam,:Tussenvoegsel,:Achternaam,:Geboortedatum, :email, :tel, :Bijzonderheden, :idArts, 1, 1 )';

$statement = $pdo->prepare($sql);

$statement->execute([
	':Zilverenkruisnummer' => $Zilverenkruisnummer,
    ':Voornaam' => $Voornaam,
    ':Tussenvoegsel' => $Tussenvoegsel,
    ':Achternaam' => $Achternaam,
    ':Geboortedatum' => $Geboortedatum,
    ':email' => $email,
    ':tel' => $tel,
    ':Bijzonderheden' => $Bijzonderheden,
    ':idArts' => $idArts,
]);

header('Location: ../patienten.php');
// echo $name.' '.'was inserted';