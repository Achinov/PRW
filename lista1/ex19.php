<?php
$time = readline ();
$horario = array(0, 0, 0);

while($time > 0) {
    switch($time) {
        case $time < 60:
            $horario[2] = $time;
            $time = 0;
        break;
        case $time < 3600:
            $horario[1] = (int) ($time / 60);
            $time %= 60;
        break;
        default:
            $horario[0] = (int) ($time / 3600);
            $time %= 3600;
    }
}

echo $horario[0] . ":" . $horario[1] . ":" . $horario[2] . "\n";
?>