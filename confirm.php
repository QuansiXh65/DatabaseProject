<?php
include "connectdb.php";
include "templates/ik.php";
?>

<button onclick="ConfirmFunction()">Try it</button>

<p id="demo"></p>

<script>
    function ConfirmFunction() {
        // var txt;
        if (confirm("Are you sure you wanna delete this student?!")) {
            <?php include "delete-student.php"; ?>
        } else {
            <?php header(header:"location:index.php"); ?>
        }
        document.getElementById("demo").innerHTML = txt;
    }
</script>

<?php
include "templates/footer.php";
?>
