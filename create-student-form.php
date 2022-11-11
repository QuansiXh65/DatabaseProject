<?php include "templates/ik.php"; ?>

<body>

<div class = "container">
    <form action="create-student.php" method="POST">
        <?php include "inputs-student.php";?>
        <input type="submit" name="Send" class = "btn btn-primary">
    </form>
</div>

</body>

<?php include "templates/footer.php";?>