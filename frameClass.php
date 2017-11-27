<?php
	class FrameClass{
		public $FrameArray;

	 	public function cargarFrame($posicionX, $posicionY, $intento){
	 		if(!is_array($this->FrameArray[$posicionX])){
	 			if($intento <= 10){
	 				$this->FrameArray[$posicionX][$posicionY] = $intento;
	 				return TRUE;
	 			}else{
	 				return 'Error, Debe ser como maximo 10 puntos';
	 			}
	 		}else{
	 			return 'ERROR';
	 		}
	 	}

	 	/*
	 		Cantidad de tiros que posee un frame
	 	*/
	 	public function cantidadTiros($posicionX){
	 		return count($this->FrameArray[$posicionX]);
	 	}

	 	public function puntajeTotalFrame(){
	 		$total = 0;
	 		foreach ($this->FrameArray as $v) {
	 			foreach ($v as $vv) {
	 				$total = $total + $vv;
	 			}
	 		}
	 		return $total;
	 	}
	}
?>