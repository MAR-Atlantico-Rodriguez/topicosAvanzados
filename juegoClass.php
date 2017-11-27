<?php
include('frameClass.php');
	class JuegoClass{
		public $juego = [];		

		function __construct() {}

	   	public function crearJuego($v1, $v2){
	   		if(count($this->juego) < 10){
	   			$frameClass = new frameClass();
	   			$frameClass->cargarFrame($v1);
	   			$frameClass->cargarFrame($v2);
	   			$this->juego[] = $frameClass;
	   			return true;
	   		}else{
	   			return 'ERROR, Mas de 10 juegos';
	   		}
	   	}

	   	public function contabilizarPuntajeJuego(){
	   		$totalJuego = 0;
	   		foreach ($this->juego as $k => $v) {
	   			$totalJuego = $totalJuego + $v->puntajeTotalFrame();
	   		}
	   		return $totalJuego;
	   	}
	 	
	}
?>