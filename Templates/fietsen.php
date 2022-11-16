<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <table class="table">
        <th>Number</th>
        <th>Merk</th>
        <th>Naam</th>
        <th>Details</th>
    <?php
    include_once "defaults/fiets.php";
    ?>

    </table>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>