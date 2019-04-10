<?php

	class GeneratorFile {
		private $value;

		function __construct($newValue){
			$this->value = $newValue;
		}

		public function getValor(){
			return $this->value;
		}
	}

?>