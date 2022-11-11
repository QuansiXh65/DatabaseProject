<?php include "./templates/ik.php"; ?>

<body>
<?php include "read-student.php";?>
<form action="update-student.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $student["id"]; ?>">

<?php include "inputs-student.php";?>

    <br><input type="submit" name="Send" class = "btn btn-primary">

</form>

</body>

<?php include "templates/footer.php"; ?>

