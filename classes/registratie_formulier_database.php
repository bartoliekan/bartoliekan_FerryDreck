<?php 
    error_reporting (E_ALL);
    ini_set("display_errors", '1');

    $con = mysqli_connect('localhost','root','root','fans');

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $voornaam = strip_tags(mysqli_real_escape_string($con, $_POST["voornaam"]));
    $achternaam = strip_tags(mysqli_real_escape_string($con, $_POST["achternaam"]));
    $email = strip_tags(mysqli_real_escape_string($con, $_POST["email"]));
    $telefoonnummer = strip_tags(mysqli_real_escape_string($con, $_POST["telefoonnummer"]));

    $sql = "INSERT INTO inschrijvingen (voornaam,achternaam,email,telefoonnummer) VALUES ('$voornaam', '$achternaam', '$email', '$telefoonnummer')";

    mysqli_query($con,$sql);
    
    mysqli_close($con);
    header('location: aboutus.html');

?>
