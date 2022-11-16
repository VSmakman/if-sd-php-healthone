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


    <?php
    global $detail;
    $num = 1;

    foreach ($detail as &$data){
        echo "<h2>" . "Artikelnummer:" . $data['ID'] .  "<br> </h2>";
        echo "<h2>" . "Merk: " . $data['Merk'] . "<br> </h2>";
        echo "<h2>" . "Type: " . $data['Type'] . "<br> </h2>";
        echo "<h2>" . "Prijs: &euro; " .
            number_format($data["prijs"],2,",",",") . "<br> </h2> <br>";
        echo "<h2>" . "voorraad: " . $data['voorraad'] . "<br> </h2>";
    }
    ?>    <a href="http://vinny.localhost/fietsen">Terug naar master pagina.</a>



    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
