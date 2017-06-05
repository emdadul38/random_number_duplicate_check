<?php 
class A {

	function myRecursiveFunction() {

		$val = rand(1,100); 

		if ($val = 5 ) {
			return $val;

		} else {        
			myRecursiveFunction();
		}
	}
}

$n = new A;
echo $n->myRecursiveFunction();