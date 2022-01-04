<?php
  
 //arth operators
  /*
  Addition		 =  +
  Subtraction	 =  -
  Multiplication =  *
  Division 		 =  /
  Modulus 		 =  %
  Exponentiation =  **

  */

  /*
	Arithmetic Assignment Operators &
	Example	Equivalent	Operation
	$a += $b	$a = $a + $b	Addition
	$a -= $b	$a = $a - $b	Subtraction
	$a *= $b	$a = $a * $b	Multiplication
	$a /= $b	$a = $a / $b	Division
	$a %= $b	$a = $a % $b	Modulus
	$a **= $b	$a = $a ** $b	Exponentiation

  */

  //echo 5 + 5.9;
  
  //echo 15 - 17;

  //echo 21 * 5; 
  
  //echo 12 / 2;

  //echo 9 % 3;

  //$num = 209;

  //$num = 109;



/*
	Bitwise Assignment Operators &
	Example	Equivalent	Operation
	$a &= $b	$a = $a & $b	Bitwise And
	$a |= $b	$a = $a | $b	Bitwise Or
	$a ^= $b	$a = $a ^ $b	Bitwise Xor
	$a <<= $b	$a = $a << $b	Left Shift
	$a >>= $b	$a = $a >> $b	Right Shift
	
*/


//assigenment operators

  //$x = 7;

  //$x += 9;

  //$x = $x + 9;

  //$x -= 3;

  //$x *= 14; 

  // $x /= 7;

  // $x = $x / 7;

  // echo $x;
  

//comparison operators
   
   /*
    ==
    ===
    !=
    >
    <

   */

    // $x = 10;

    // $y = 9;

    // //echo gettype($y);

    // var_dump($x < $y);



//decrement/increment operators

   /*

     ++$x
     $x++
     --$x
     $x-- 

   */

     $num = 10;

     //echo ++$num;

     //echo $num++;
     
     //echo --$num;

     echo $num--;
    

	$a = 3;
	$b = &$a; // $b is a reference to $a

	print "$a\n"; // prints 3
	print "$b\n"; // prints 3

	$a = 4; // change $a

	print "$a\n"; // prints 4
	print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
				  // been changed
?>


