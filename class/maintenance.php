<?php
    class maintenance{

        // Les parametres-----------------------------------------------------------------
        private $idmaintenance ='';
        private $electricite ='';
        private $electronique ='';
        private $circuit ='';
        private $coque ='';
        private $grement ='';



        public function hydrate(array $donnees)
        {
            if (isset($donnees['idmaintenance'])) {
                $this->idmaintenance = $donnees['maintenance'];
            }
        }
    }