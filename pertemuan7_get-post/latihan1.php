<?php
// variable scope / lingkup variabel
// variabel global dan variabel lokal

$x = 10; //=> global variabel

function tampilX()
{
    $x = 20; //=> variabel lokal
    echo $x;
}

function tampilXx()
{
    global $x; //=> cara untuk memanggil variabel global yang ada diluar lingkup
    echo $x;
}

tampilX();
echo "<br>";
echo $x;
echo "<br>";
tampilXx();
