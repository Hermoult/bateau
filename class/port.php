<?php
    class port extends bateau
    {
        // Les parametres------------------------------------------------------------------
        private $_idport;
        private $_portDepart;
        private $_portArrive;
        private $_escale;
        private $_datesArrivees;
        private $_datesDepart;
        private $_datesEscales;



        // Le Constructeur------------------------------------------------------------------
        
        
        
        // Les Setters------------------------------------------------------------------
        
        
        
        // Les Getters------------------------------------------------------------------
        
        
        
        // Les Methodes------------------------------------------------------------------
        
        public function hydrate(array $donnees)
        {
            if(isset($donnees['idport'])){ $this->_idport = $donnees['idport'];}
        }





    }
    






