
<?php
global $result;

$num = 1;

foreach ($result as&$data) {
    echo "<tr>";
    echo "<td>" . $num . "</td>";
    echo "<td>" . $data["Merk"] . "</td>";
    echo "<td>" . $data["Type"] . "</td>";
    echo "<td>" . $data["prijs"] . "</td>";
    echo "<td>" . $data["Voorraad"] . "</td>";
    echo "<td>" . "<a href='detail/" . $data['ID'] . "'>details</a>";
    echo "<td>" . "<a href='update/" . $data['ID'] . "'>update</a>";
    echo "<td>" . "<a href='delete/" . $data['ID'] . "'>delete</a>";
    $num++;
    echo "</tr>";
}
echo "<td>" . "<a href='insert/" . $data['ID'] . "'>insert</a>";

?>
