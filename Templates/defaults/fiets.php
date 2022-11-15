<h1>Fietsen</h1>
<?php
global $result;

$num = 1;
echo "<table>";
foreach ($result as&$data) {
    echo "<tr>";
    echo "<td>" . $num . "</td>";
    echo "<td>" . "<a href='detail.php?id=" . $data['ID'] . "'>";
    echo "" . $data["Merk"] . " ";
    echo "" . $data["Type"] . "</td>";
    echo "<td>" . $data["prijs"] . "</td>";
    $num++;
    echo "</tr>";
}
echo "</table>";
?>
