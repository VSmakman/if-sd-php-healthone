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
        global $fiets;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <form method="post">
                    <label for="Merk">Merk</label>
                    <input type="text" name="merk" class="form-control" value="<?=$fiets['Merk']?>" id="merk">
                    <br>
                    <label for="Type" >Type</label>
                    <input type="text" name="type" class="form-control" value="<?=$fiets['Type']?>"  id="Type">
                    <br>
                    <label for="Prijs">Prijs</label>
                    <input type="text" name="prijs" class="form-control" value="<?=$fiets['prijs']?>" id="Prijs">
                    <br>
                    <label for="Voorraad">Voorraad</label>
                    <input type="text" name="voorraad" class="form-control" value="<?=$fiets['Voorraad']?>" id="Voorraad">
                    <br>
                    <button type="submit" name="verzenden" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>