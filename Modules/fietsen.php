<?php
function getFietsen():array
{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $fietsen = $query->fetchAll (PDO::FETCH_ASSOC);
    return $fietsen;
}

//functiongFiets($id):array
//{
//    $num = 1;
//    echo "<table>";
//    foreach ($result as&$data) {
//        echo "<tr>";
//        echo "<td>" . $num . "</td>";
//        echo "<td>" . "<a href='detail.php?id=" . $data['ID'] . "'>";
//        echo "" . $data["Merk"] . " ";
//        echo "" . $data["Type"] . "</td>";
//        echo "<td>" . $data["prijs"] . "</td>";
//        $num++;
//        echo "</tr>";
//    }
//    echo "</table>";
//}



?>


