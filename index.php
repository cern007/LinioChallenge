<?php
/*
program description:

Challenge - Backend Developer
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.
Requirements

    -1 if
    -You can't use `else`, `else if` or ternary
    -Unit tests
    -Feel free to apply your SOLID knowledge
    -You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript 
*/

function ValidateNumber($number,$multiple_rules) {
	foreach ($multiple_rules as $value) {
    		if (($number%$value[0]==0) && ($number%$value[1]==0)){
    			return $value[2];
    		}
	}
	return $number;
} 


function Exercise(){
	$finalString="";
	$number="";

	$multiple_rules = array(array("5", "3","Linianos"),array("5", "1","IT"),array("3", "1","Linio"));

	for ($x=1; $x<= 99; $x++) {
   		$number=ValidateNumber($x,$multiple_rules);
    	$finalString.=$number.",";
	} 
	
	$number=ValidateNumber($x,$multiple_rules);
	$finalString.=$number;
	return $finalString;
}


//echo Exercise();

function UnitTest($expected_value){
	return Exercise()==$expected_value;
}

$expected1="1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,19,IT,Linio,22,23,Linio,IT,26,Linio,28,29,Linianos,31,32,Linio,34,IT,Linio,37,38,Linio,IT,41,Linio,43,44,Linianos,46,47,Linio,49,IT,Linio,52,53,Linio,IT,56,Linio,58,59,Linianos,61,62,Linio,64,IT,Linio,67,68,Linio,IT,71,Linio,73,74,Linianos,76,77,Linio,79,IT,Linio,82,83,Linio,IT,86,Linio,88,89,Linianos,91,92,Linio,94,IT,Linio,97,98,Linio,IT";

$expected2="1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,";

$expected3="1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,";

$expected4="1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,19,IT,Linio,22,23,Linio,IT,26,Linio,28,29,Linianos,31,32,Linio,34,IT,Linio,37,38,Linio,IT,41,Linio,43,44,Linianos,46,47,Linio,49,IT,Linio,52,53,Linio,IT,56,Linio,58,59,Linianos,61,62,Linio,64,IT,Linio,67,68,Linio,IT,71,Linio,73,74,Linianos,76,77,Linio,79,IT,Linio,82,83,Linio,IT,86,Linio,88,89,Linianos,91,92,Linio,94,IT,Linio,97,98,Linio,IT";

//test passed
echo "Running some tests '1 means passed'<br>";
echo "test1:".UnitTest($expected1)."<br>";
echo "test2:".UnitTest($expected2)."<br>";
echo "test3:".UnitTest($expected3)."<br>";
echo "test4:".UnitTest($expected4)."<br>";
//


?>
