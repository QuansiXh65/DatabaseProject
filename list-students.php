<?php

include "connectdb.php";
include "templates/ik.php";

$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();

?>

<table class="table">
    <thead class = "thead-light">
    <tr class = "container">
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Straatnaam</th>
        <th>Huisnummer</th>
        <th>Postcode</th>
        <th>Woonplaats</th>
        <th>E-mailadres</th>
        <th>Telefoonnummer</th>
        <th>Acties</th>
        <th>Verwijderen</th>

    </tr>
    </thead>
    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td><?php echo $row["straatnaam"]; ?></td>
            <td><?php echo $row["huisnummer"]; ?></td>
            <td><?php echo $row["postcode"]; ?></td>
            <td><?php echo $row["woonplaats"]; ?></td>
            <td><?php echo $row["emailadres"]; ?></td>
            <td><?php echo $row["telefoonnummer"]; ?></td>
            <td><a type="button" class="btn btn-outline-primary" href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>

            <td><a type="button" class="btn btn-outline-danger" href="confirm.php?id=<?php echo $row["id"]?>">Verwijderen</a></td>
<!--            <td><a type="button" class="btn btn-outline-danger" href="delete-student.php?id=--><?php //echo $row["id"]?><!--">Verwijderen</a></td>-->
        </tr>

    <?php } ?>

    </tbody>
</table>

