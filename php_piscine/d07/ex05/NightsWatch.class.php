<?php

class NightsWatch implements IFighter {
	private $newreq = [];
	public function recruit($name) {
		$this->newreq[] = $name;
	}
	function fight() {
		foreach ($this->newreq as $fighter) {
			if (method_exists(get_class($fighter), 'fight'))
				$fighter->fight();
		}
	}
}

?>