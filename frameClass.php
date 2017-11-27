<?php
	class FrameClass{
		public $FrameArray;

	 	public function cargarFrame($posicionX, $posicionY, $intento){
	 		if(is_null($this->FrameArray[$posicionX][$posicionY])){
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
	}
?>