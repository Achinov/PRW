<?php

$i = readline();
$data = array(0, 0, 0);

while ($i > 0) {
    switch($i) {
        case ($i < 30):
            $data[2] = $i;
            $i = 0;
        break;
        case ($i < 365):
            $data[1] = (int) ($i / 30);
            $i %= 30;
        break;
        default:
            $data[0] = (int) ($i / 365);
            $i %= 365;
    }
}

echo $data[0] . " ano(s)\n";
echo $data[1] . " mes(es)\n";
echo $data[2] . " dia(s)\n";


?>
