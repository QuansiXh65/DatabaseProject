<?php

$voornaam = "";
if (!empty($student)){
    $voornaam = $student["voornaam"];

} $achternaam = "";
if(!empty($student)){
    $achternaam = $student["achternaam"];

} $straatnaam = "";
if(!empty($student["straatnaam"])){
    $straatnaam = $student["straatnaam"];

}$huisnummer = "";
if(!empty($student["huisnummer"])){
    $huisnummer = $student["huisnummer"];

}$postcode = "";
if(!empty($student["postcode"])){
    $postcode = $student["postcode"];

}$woonplaats = "";
if(!empty($student["woonplaats"])){
    $woonplaats = $student["woonplaats"];

}$emailadres = "";
if(!empty($student["emailadres"])){
    $emailadres = $student["emailadres"];

}$telefoonnummer = "";
if(!empty($student["telefoonnummer"])){
    $telefoonnummer = $student["telefoonnummer"];
}
?>

    <label for="titel">Voornaam:</label>
        <input class="form-control" type="text" id="voornaam" name="voornaam" required value="<?php echo $voornaam;?>">

    <label for="titel">Achternaam:</label>
        <input  class="form-control" type="text" id="achternaam" name="achternaam" required value="<?php echo $achternaam;?>">

<div>
    <label for="titel">Straatnaam</label>
        <input class="form-control" type="text" id="straatnaam" name="straatnaam" required value="<?php echo $straatnaam;?>">
</div>

<div>
    <label for="titel">Huisnummer</label>
    <input class="form-control" type="text" id="huisnummer" name="huisnummer" required value="<?php echo $huisnummer;?>">
</div>

<div>
    <label for="titel">Postcode</label>
    <input class="form-control" type="text" id="postcode" name="postcode" value="<?php echo $postcode;?>">
</div>

<div>
    <label for="titel">Woonplaats</label>
    <input class="form-control" type="text" id="woonplaats" name="woonplaats" required value="<?php echo $woonplaats;?>">
</div>

<div>
    <label for="titel">E-mail</label>
    <input class="form-control" type="text" id="emailadres" name="emailadres" required value="<?php echo $emailadres;?> ">
</div>

<div>
    <label for="titel">Telefoonnummer</label>
    <input class="form-control" type="text" id="telefoonnummer" name="telefoonnummer" value="<?php echo $telefoonnummer;?> ">
</div>

<?php
//////
//if (empty($_POST['voornaam'])) {
//    echo "Vul dit in!";
//}else {
//    echo "succes";
//}
//////
//////?>


