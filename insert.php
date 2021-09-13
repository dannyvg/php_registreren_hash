<?php

$pdo = require_once 'connect.php';

$name = $_POST['name'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['wachtwoord'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$rol = $_POST['roles'];



$sql = 'INSERT INTO arts(Naam_Arts,Address,Telefoonnummer, Email, Wachtwoord, role) VALUES(:name,:address,:tel,:email,:password, :rol)';

$statement = $pdo->prepare($sql);

$statement->execute([
	':name' => $name,
    ':address' => $address,
    ':tel' => $tel,
    ':email' => $email,
    ':password' => $hash,
    ':rol' => $rol
]);


echo $name.' '.'was inserted';