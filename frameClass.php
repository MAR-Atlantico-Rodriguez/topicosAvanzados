<?php
	class FrameClass{
		public $FrameArray;

	 	public function cargarFrame($posicionX, $posicionY, $intento){
	 		if(is_null($this->FrameArray[$posicionX][$posicionY])){
	 			$this->FrameArray[$posicionX][$posicionY] = $intento;
	 			return TRUE;
	 		}else{
	 			return 'ERROR';
	 		}
	 	}

	}

?>