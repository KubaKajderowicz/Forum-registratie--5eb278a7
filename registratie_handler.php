<?php

if (isset($_POST['submit'])) {

    $naam = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["leeftijd"];

    echo "<h1>Forum Regristatie</h1>";
    echo "<h3>jouw username is:" . $naam . " </h3>";
    echo "<h3>jouw email is:" . $email . " </h3>";
    echo "<h3>jouw leeftijd is:" . $age . " </h3>";

    die();
}
else 
{
  echo "no username supplied";
}
