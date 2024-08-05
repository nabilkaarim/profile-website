<?php
$file = fopen("student.txt", "r");
while (($line = fgetcsv($file)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($file);
?>
