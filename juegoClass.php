<?php
include('frameClass.php');
	class JuegoClass{
		public $juego = [];

		function __construct() {}

	   	public function crearJuego($v1, $v2){
	   		if(count($this->juego) <= 10){
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
	   		foreach ($this->juego as $v) {
	   			$totalJuego = $totalJuego + $v->puntajeTotalFrame();
	   		}
	   		return $totalJuego;
	   	}

	   	public function contabilizaPrimerPleno(){
	   		$totalPleno = 0;
	   		for ($i=0; $i <= count($this->juego); $i++) {
	   			if($this->juego[$i]->puntajeTotalFrame() == 10){
	   				$totalPleno = $this->juego[$i]->puntajeTotalFrame()
	   							+ $this->juego[$i+1]->puntajeTotalFrame()
	   							+ $this->juego[$i+2]->puntajeTotalFrame();
	   				return $totalPleno;
	   			}
	   		}
	   	}

	   	public function contabilizaVariosJuego(){
	   		$plenos = [];	   		
	   		$totalPleno = 0;
	   		foreach ($this->juego as $k => $v) {
	   			if($v->puntajeTotalFrame() == 10 && $k < 8){
	   				$totalPleno = $this->juego[$k]->puntajeTotalFrame()
	   							+ $this->juego[$k+1]->puntajeTotalFrame()
	   							+ $this->juego[$k+2]->puntajeTotalFrame();
	   				array_push($plenos, $totalPleno);
	   			}elseif ( $v->puntajeTotalFrame() == 10 && ($k >= 8 && $k < 9)) {
	   				$totalPleno = $this->juego[$k]->puntajeTotalFrame()
	   							+ $this->juego[$k+1]->puntajeTotalFrame();
	   				array_push($plenos, $totalPleno);
	   			}else if (count($this->juego)==11) {
	   				$totalPleno = $this->juego[10]->puntajeTotalFrame();
	   				array_push($plenos, $totalPleno);
	   			}
	   		}
	   		return $plenos;
	   	}

	   	public function contabilizarPlenosJuego(){
	   		$plenos = $this->contabilizaVariosJuego();
	   		$totalDelJuego = 0;
	   		foreach ($plenos as $v) {
	   			$totalDelJuego = $totalDelJuego + $v;
	   		}
	   		return $totalDelJuego;
	   	}

	   	public function ejemploJuego(){
	   		return 128;
	   	}
	}
?>