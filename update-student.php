<?php

include "update-student-form.php";

$voornaam = $_POST['voornaam'];
$achternaam =$_POST['achternaam'];
$straatnaam =$_POST['straatnaam'];
$huisnummer =$_POST['huisnummer'];
$postcode =$_POST['postcode'];
$woonplaats =$_POST['woonplaats'];
$emailadres =$_POST['emailadres'];
$telefoonnummer =$_POST['telefoonnummer'];
$id=$_POST['id'];

$sql= "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, straatnaam = :straatnaam, huisnummer = :huisnummer, postcode = :postcode, woonplaats = :woonplaats, emailadres = :emailadres, telefoonnummer = :telefoonnummer WHERE id = :id";
$sth=$db->prepare($sql);
$sth->execute([':voornaam'=>$voornaam, ':achternaam'=>$achternaam, ':straatnaam'=>$straatnaam, ':huisnummer'=>$huisnummer, ':postcode'=>$postcode, ':woonplaats'=>$woonplaats, ':emailadres'=>$emailadres, ':telefoonnummer'=>$telefoonnummer,':id'=>$id]);

header(header:"location:index.php");

