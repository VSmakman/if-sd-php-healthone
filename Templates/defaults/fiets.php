
<?php
global $result;

$num = 1;

foreach ($result as&$data) {
    echo "<tr>";
    echo "<td>" . $num . "</td>";
    echo "<td>" . $data["Merk"] . "</td>";
    echo "<td>" . $data["Type"] . "</td>";
    echo "<td>" . "<a href='detail/" . $data['ID'] . "'>details</a>";
    $num++;
    echo "</tr>";
}

?>
