<?php
$O = readline();
$sum = 0.0;
$count = 0;
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = floatval(fgets(STDIN));
        if ($j > 5 && $i < $j && $i > 11 - $j) {
            $sum += $M[$i][$j];
            $count++;
        }
    }
}
if (trim($O) == 'S') {
    echo number_format($sum, 1, '.', '') . "\n";
} else {
    echo number_format($sum / $count, 1, '.', '') . "\n";
}
?>