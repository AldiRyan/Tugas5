<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>

<!--PHP statis Kata Kunci-->
<!--contoh variabel-->