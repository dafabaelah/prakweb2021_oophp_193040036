<?php

class ContohStatic {
    public static $angka = 1;

    public static function hallo() {
        return "Halo ". self::$angka++. " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<hr>";
echo ContohStatic::hallo();

?>