<?php

	class HTML implements CoordinateInterface
	{
		public function getting(GeneratorFile $GeneratorFile){
			return $GeneratorFile->getValor()." -> HTML gerated." ;
		}
	}
?>