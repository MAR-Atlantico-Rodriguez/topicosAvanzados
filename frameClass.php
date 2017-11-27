<?php
	class FrameClass{
		public $FrameArray = [];

	 	public function cargarFrame($intento){
	 		if($intento <= 10){
	 			array_push($this->FrameArray, $intento);
	 			return true;
	 		}else{
	 			return 'Error, Debe ser como maximo 10 puntos';
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
	 		foreach ($this->FrameArray as $k => $v) {
				$total = $total + $v;
	 		}
	 		return $total;
	 	}
	}
?>