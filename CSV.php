<?php
	class CSV implements CoordinateInterface{

		public function getting(GeneratorFile $GeneratorFile){
			return $GeneratorFile->getValor()." ->CSV gerated." ;
		}


	}
?>