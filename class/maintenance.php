<?php
    class maintenance extends bateau{

        // Les parametres-----------------------------------------------------------------        
        /**
         *
         * @var string id de la maintenance
         * @var string date maintenance electrique
         * @var string date maintenance electronique
         * @var string date maintenance des circuits
         * @var string date maintenance de la coque
         * @var string date maintenance de l'agrement
         */
        private $_idmaintenance ='';
        private $_electricite ='';
        private $_electronique ='';
        private $_circuit ='';
        private $_coque ='';
        private $_grement ='';
        //Le constructeur-----------------------------------------------------------------




        //Les Setteur---------------------------------------------------------------------




        //Les Getteurs--------------------------------------------------------------------




        //Les methodes--------------------------------------------------------------------


        public function hydrate(array $donnees)
        {
            if (isset($donnees['idmaintenance'])) {
                $this->idmaintenance = $donnees['maintenance'];
            }
        }
    }