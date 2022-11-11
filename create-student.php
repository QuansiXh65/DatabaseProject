<a href="create-student-form.php">Student toevoegen</a>

<?php include "connectdb.php"; ?>
<?php include "list-students.php"; ?>


<?php $student = "";

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$postcode = $_POST['postcode'];
$woonplaats = $_POST['woonplaats'];
$emailadres = $_POST['emailadres'];
$telefoonnummer = $_POST['telefoonnummer'];

$sql = 'INSERT INTO student (voornaam, achternaam, straatnaam, huisnummer, postcode, woonplaats, emailadres, telefoonnummer) VALUES (:voornaam, :achternaam, :straatnaam, :huisnummer, :postcode, :woonplaats, :emailadres, :telefoonnummer)';
$stmt = $db-> prepare ($sql);
$stmt->execute ([':voornaam'=>$voornaam, ':achternaam'=>$achternaam, ':straatnaam'=>$straatnaam, ':huisnummer'=>$huisnummer, ':postcode'=>$postcode, ':woonplaats'=>$woonplaats, ':emailadres'=>$emailadres, ':telefoonnummer'=>$telefoonnummer]);

header(header:"location:index.php");
?>
