<?php 
# FUNCTION- Block of code that can be repeatedly called

/*

	Camel Case - myFunction()
	Lower Case - my_function()
	Pascal Case - MyFunction()

*/

// Create simple function
	function simpleFunction(){
		echo "Hello World!";
	}

// Run simple function
// simpleFunction();

// Function with param
	function sayHello($name='World'){
		echo "Hello $name<br>";
	}

	//sayHello('Joe');
	//sayHello('Tim');

	//Return value
	function addNumbers($num1, $num2){
     return $num1+$num2;
	}

  // echo addNumbers(2,3);

// By reference

	$myNumber=10;

	function addFive($num){
		$num+=5;
	}

	function addTen(&$num){
		$num+=10;
	}

  	addFive($myNumber);
  	echo "Value: $myNumber<br>";

	addTen($myNumber);
  	echo "Value: $myNumber<br>";
 ?>