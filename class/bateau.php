<?php
    class bateau{

        // Les parametres-----------------------------------------------------------------
        private $idbateau ='';
        private $nom ='';
        private $modele ='';
        private $taille ='';
        private $proprietaire ='';
        private $maintenance_idmaintenance ='';
        private $carnetDeBord_idcarnetDeBord ='';
        private $createdBy ='';
        private $createdDate ='';
        private $updatedBy ='';
        private $updatedDate ='';


        //Le constructeur-----------------------------------------------------------------




        //Les Setteur---------------------------------------------------------------------




        //Les Getteurs--------------------------------------------------------------------




        //Les methodes--------------------------------------------------------------------
        
        public function hydrate(array $donnees)
        {
            if(isset($donnees['idbateau'])){ $this->idbateau = $donnees['idbateau'];}
        }


    }