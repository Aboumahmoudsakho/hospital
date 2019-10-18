<?php 
	/**
	 * 
	 */
	class specialite
	{
		
		private $nom;
        private $prenom;
        private $ids;

		function setnom($nom)
		{
			$this->nom=$nom;
			return $this;
		}

		function setprenom($prenom)
		{
			$this->prenom=$prenom;
			return $this;
        }
        function setids($ids)
		{
			$this->ids=$ids;
			return $this;
		}
		function getnom()
		{
			
			return $this->nom;
		}

		function getprenom()
		{
		
			return $this->prenom;
        }
        function getids()
		{
		
			return $this->ids;
		}
	}

 ?>