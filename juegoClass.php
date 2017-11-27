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

	   public function contabilizaUnPleno(){
	   		$arrayPleno = [];
	   		for ($i=0; $i <= count($this->juego); $i++) {
	   			$totalPleno = 0;
	   			if($this->juego[$i]->puntajeTotalFrame() == 10){
	   				$totalPleno = $this->juego[$i]->puntajeTotalFrame() 
	   							+ $this->juego[$i+1]->puntajeTotalFrame() 
	   							+ $this->juego[$i+2]->puntajeTotalFrame();
	   				array_push($arrayPleno, $totalPleno);
	   			}
	   		}
	   		return $arrayPleno;
	   }
	 	
	}
?>