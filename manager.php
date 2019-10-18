<?php 
	require 'sp.php';
    require 'mn.php';
	/**
	 * 
	 */

	class manager
	{
		private $pdo;
		private $pdostatement;
		function __construct()
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=hopital','sakho','1234');
		}
		public function creat(specialite $specialite)
		{
			$this->pdostatement=$this->pdo->prepare('INSERT INTO specialite VALUES(NULL,:libser,:codes)');

			$this->pdostatement->bindvalue(':libser',$specialite->getnom(), PDO::PARAN_STR);
			$this->pdostatement->bindvalue(':codes',$specialite->getsrc(), PDO::PARAN_STR);

			$execution=$this->pdostatement->execute();
			if ($execution)
			 {
				return true;
			}
			else
			{
				return false;
			}
        }
        public function creat1(medecin $medecin)
		{
			$this->pdostatement=$this->pdo->prepare('INSERT INTO medecin VALUES(NULL,:nom,:prenom,:ids)');

			$this->pdostatement->bindvalue(':nom',$specialite->getnom(), PDO::PARAN_STR);
			$this->pdostatement->bindvalue(':prenom',$specialite->getprenom(), PDO::PARAN_STR);
            $this->pdostatement->bindvalue(':ids',$specialite->getids(), PDO::PARAN_STR);
			$execution=$this->pdostatement->execute();
			if ($execution)
			 {
				return true;
			}
			else
			{
				return false;
			}
		}
	}
 ?>