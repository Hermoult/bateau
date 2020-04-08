<?php
    class bateau{

        // Les parametres-----------------------------------------------------------------
        private $_idbateau ='';
        private $_nom ='';
        private $_modele ='';
        private $_taille ='';
        private $_proprietaire ='';
        private $_maintenance_idmaintenance ='';
        private $_carnetDeBord_idcarnetDeBord ='';
        private $_createdBy ='';
        private $_createdDate ='';
        private $_updatedBy ='';
        private $_updatedDate ='';


        //Le constructeur-----------------------------------------------------------------




        //Les Setteur---------------------------------------------------------------------




        //Les Getteurs--------------------------------------------------------------------




        //Les methodes--------------------------------------------------------------------
        
        public function hydrate(array $donnees)
        {
            if(isset($donnees['idbateau'])){ $this->idbateau = $donnees['idbateau'];}
        }


    } 