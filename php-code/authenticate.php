<?php

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username']) && !isset($_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}
$con = require 'connect.php';

if ($stmt = $con->prepare('SELECT idGebruiker, Naam_Gebruiker, wachtwoord FROM gebruikers WHERE Email = :username')) {

	$stmt->bindParam(':username', $_POST['username']);
	$stmt->execute();

    // var_dump($stmt);
	
    if ($stmt->rowCount() > 0) {

        $user=$stmt->fetch(PDO::FETCH_ASSOC);
     
        $hashed_password = hash('sha256', $_POST["password"]);
        if ($hashed_password==$user["wachtwoord"]) {

            session_start();
            
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $user['Naam_Gebruiker'];
            $_SESSION['idArts'] = $user['idGebruiker'];
            header('Location: ../home.php');

        } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }


 $con = null;
}
?>


