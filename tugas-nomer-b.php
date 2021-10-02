<?php
$usia = array('anak-anak' => range(5, 11), 'remaja' => range(12, 25), 'dewasa' => range(26, 45), 'lansia' => range(46, 65));
foreach ($usia as $key => $value) {
    if ($key == 'dewasa') {
        echo "Range usia " . $key . ": ";
        foreach ($value as $key => $values) {
            if ($values >= 35 && $values <= 40) {
                echo $values . " ";
            }
        }
    }
}
foreach ($usia as $key => $value) {
    if ($key == 'lansia') {
        echo "<p>Range usia " . $key . ": ";
        foreach ($value as $key => $values) {
            if ($values == 60) {
                echo $values . " ";
            }
        }
    }
}