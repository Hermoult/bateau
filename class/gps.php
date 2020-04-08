<?php
class gps
{

    // Les parametres-----------------------------------------------------------------
    private $idgps = '';
    private $longitude = '';
    private $latitude = '';


    //Le constructeur-----------------------------------------------------------------




    //Les Setteur---------------------------------------------------------------------




    //Les Getteurs--------------------------------------------------------------------




    //Les methodes--------------------------------------------------------------------

    public function hydrate(array $donnees)
    {
        if (isset($donnees['idgps'])) {
            $this->idgps = $donnees['idgps'];
        }
    }
}
