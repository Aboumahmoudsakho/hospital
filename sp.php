<?php 
	/**
	 * 
	 */
	class specialite
	{
		
		private $libser;
		private $codes;

		function setnom($libser)
		{
			$this->libser=$libser;
			return $this;
		}

		function setsrc($codes)
		{
			$this->codes=$codes;
			return $this;
		}
		function getnom()
		{
			
			return $this->libser;
		}

		function getsrc()
		{
		
			return $this->codes;
		}
	}

 ?>