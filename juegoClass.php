<?php
use frameClass as frameClass;
	class JuegoClass{
		public $juego = [];
		public $frameClass;

		function __construct() {
	       $this->frameClass = new frameClass();
	   	}

	 	public function cargarFrame($posicionX, $posiciony, $intento) {
	 		$this->frameClass->cargarFrame($posicionX, $posiciony, $intento);
	 	}	 	
	}

?>