<?php
	class FrameClass{

		public $FrameArray = [];

	 	public function suma($a,$b) {
	 	  	return $a+$b;
	 	}

	 	public function cargarFrame($posicionX, $posicionY, $intento){
	 		if($this->FrameArray[$posicionX][$posicionY] != null){
	 			$this->FrameArray[$posicionX][$posicionY] = $intento;
	 			return true;
	 		}else{
	 			return 'Error, posiciones ocupadas';
	 		}
	 	}

	}
?>