<?php

class UnholyFactory {
	private $fgt = [];
	public function absorb($name) {
		if (get_parent_class($name)) {
			if (isset($this->fgt[$name->getName()])) {
				print("(Factory already absorbed a fighter of type " . $name->getName() . ")" . PHP_EOL);
			}
			else {
				print("(Factory absorbed a fighter of type " . $name->getName() . ")" . PHP_EOL);
				$this->fgt[$name->getName()] = $name;
			}
		}
		else {
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
	}
	public function fabricate($name) {
		if (array_key_exists($name, $this->fgt)) {
			print("(Factory fabricates a fighter of type " . $name . ")" . PHP_EOL);
			return (clone $this->fgt[$name]);
		}
		print("(Factory hasn't absorbed any fighter of type " . $name . ")" . PHP_EOL);
		return NULL;
	}
}
	
?>