
<?php

include_once "Bunga.php";

class Mawar implements Bunga{
    public function namaBunga()
    {
        echo "Bunga Mawar";
    }

    public function warnaBunga()
    {
        echo "Bunga Mawar Berwarna Merah";
    }

    public function tempatAsal()
    {
        echo "Bunga Mawar berasal dari Eropa Timur";
    }
}