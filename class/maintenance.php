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
        /**
         * Set date maintenance de l'agrement
         *
         * @param  string  $_idmaintenance  date maintenance de l'agrement
         *
         * @return  self
         */ 
        public function set_idmaintenance(string $_idmaintenance)
        {
                $this->_idmaintenance = $_idmaintenance;

                return $this;
        }

        /**
         * Set the value of _electricite
         *
         * @return  self
         */ 
        public function set_electricite($_electricite)
        {
                $this->_electricite = $_electricite;

                return $this;
        }

        /**
         * Set the value of _electronique
         *
         * @return  self
         */ 
        public function set_electronique($_electronique)
        {
                $this->_electronique = $_electronique;

                return $this;
        }

        /**
         * Set the value of _circuit
         *
         * @return  self
         */ 
        public function set_circuit($_circuit)
        {
                $this->_circuit = $_circuit;

                return $this;
        }

        /**
         * Set the value of _coque
         *
         * @return  self
         */ 
        public function set_coque($_coque)
        {
                $this->_coque = $_coque;

                return $this;
        }

        /**
         * Set the value of _grement
         *
         * @return  self
         */ 
        public function set_grement($_grement)
        {
                $this->_grement = $_grement;

                return $this;
        }

        //Les Getteurs--------------------------------------------------------------------




        //Les methodes--------------------------------------------------------------------


        public function hydrate(array $donnees)
        {
            if (isset($donnees['idmaintenance'])) {
                $this->idmaintenance = $donnees['maintenance'];
            }
        }

    }