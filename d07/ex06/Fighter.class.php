<?php

class Fighter {
	private $fgt_name;
	public function __construct($n) {
		$this->fgt_name = $n;
	}
	public function getName() {
		return $this->fgt_name;
	}
}

?>