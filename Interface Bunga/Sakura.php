
<?php

include_once "Bunga.php";

class Sakura implements Bunga{
    public function namaBunga()
    {
        echo "Bunga Sakura";
    }

    public function warnaBunga()
    {
        echo "Bunga Sakura Berwarna Pink";
    }

    public function tempatAsal()
    {
        echo "Bunga Sakura berasal dari Jepang";
    }
}