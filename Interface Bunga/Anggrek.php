
<?php

include_once "Bunga.php";

class Anggrek implements Bunga{
    public function namaBunga()
    {
        echo "Bunga Anggrek";
    }

    public function warnaBunga()
    {
        echo "Bunga Angrrek Berwarna Putih";
    }

    public function tempatAsal()
    {
        echo "Bunga Anggrek berasal dari Tiongkok";
    }
}