<?php
// if not logged in
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home | ZilverenKruis</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<?php
include 'nav.php';
?>


<?php
    echo "<div class='name'> Naam:"." ".$_SESSION['name']; "</div>";

if ($_SESSION['role'] = 1){

    echo "<div class='role'>Role: Verzekeraar</div>";

} elseif($_SESSION['role'] = 2){

    echo "<div class='role'>Role: Apotheek</div>";

} else{

    echo "<div class='role'>Role: Artsen</div>";
}
?>

<div class="square">
Artsen
</div>

<div class="square">
Apotheken
</div>
<br>
<div class="square">
Medicijnen 
</div>

<div class="square">
Patienten
</div>





</body>
</html>