<?php
function getFietsen():array
{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $fietsen = $query->fetchAll (PDO::FETCH_ASSOC);
    return $fietsen;
}

function getFiets($id):array
{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $detail = $query->fetch(PDO::FETCH_ASSOC);
    return $detail;
}

function updateFiets($merk,$type,$prijs,$voorraad)
{
    try {
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
        if (isset($_POST["verzenden"])){
            $merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, "prijs", FILTER_VALIDATE_FLOAT);
            $voorraad = filter_input(INPUT_POST, "voorraad", FILTER_VALIDATE_FLOAT);
            $query = $db->prepare("UPDATE fiets SET merk = :merk, type = :type, prijs = :prijs, voorraad = :voorraad WHERE id = :id ");
            if (!empty($_POST["merk"]) && !empty($_POST["type"]) && !empty($_POST["prijs"]) && !empty($_POST["voorraad"])){
                echo "vul geldige prijs in!";
            } else{
                $query->bindParam("merk", $merk);
                $query->bindParam("type", $type);
                $query->bindParam("prijs", $price);
                $query->bindParam("voorraad", $voorraad);
                if ($query->execute()){
                    echo "het is updated";
                } else{
                    echo "Er is een fout opgetreden!";
                }
            }
        }else {
        }
    } catch(PDOException $e){
        die("Error!:" . $e->getMessage());
    }
}




