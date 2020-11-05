<?php

class Example {

	public $foo = 0;

	function __construct() {
		print('Constructor called' . PHP_EOL);
		print('$this->foo: ' . $this->foo . PHP_EOL);
		$this->foo = 42;
		print('$this->foo: ' . $this->foo . PHP_EOL);
		$this->bar();
		return;
	}

	function __destruct() {
		print('Destructor called' . PHP_EOL);
		return;
	}

	function bar() {
		print('Method bar called' . PHP_EOL);
		return;
	}
}

$instance = new Example();

/* print('$instance->foo: ' . $instance->foo . PHP_EOL);
$instance->foo = 42;
print('$instance->foo: ' . $instance->foo . PHP_EOL);

$instance->bar(); */
?>

