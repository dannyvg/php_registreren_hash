<?php

// function dropdowntest(){

//     $pdo = require_once 'connect.php';

//     $sql = "SELECT idArts, Naam_Arts FROM arts";
//     $result = mysqli_query($pdo, $sql);
//     $queryResult = mysqli_num_rows($result);
//     while ($row = mysqli_fetch_assoc($result)) {
//     echo "<option value='". $row['idArts'] . "'>" . $row['Naam_Arts'] . "</option>";
//     }
// }

function test(){
    $pdo = require_once 'connect.php';  
    $smt = $pdo->prepare("SELECT idArts, Naam_Arts FROM arts");
    $smt->execute();
    $data = $smt->fetchAll();
    return $data;
}

?>

