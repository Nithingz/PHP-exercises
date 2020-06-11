<?php

/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$num = 1;

while($num<=10)
{
	echo $num;
	$num++;
	echo"<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
foreach (range(5,100,5) as $number){

print_r($number);
echo"<br>";
}

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
$i = 0;
while($i <= 20){
	if($i % 2 == 0){
		echo $i." - Even, ";
		}else{
			echo $i." - Odd, ";
		}
		$i++;
		echo"<br>";
	}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = array("food1", "food2","food3", "food4");
/*
Use while-loop to print array elements (every food in a new row).
*/
$f = 0;
while ( $f <= 3) {
	echo $food[$f];
	echo"<br>";
	$f++;
}


echo "<hr style=\"margin 1rem 0\">";
/*
Use foreach-loop to print array elements (every food in a new row).
*/
for($x = 0; $x <=3; $x++){
	echo $food[$x];
	echo"<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo '<ul>';
for($x = 0; $x <=3; $x++){
	echo $food[$x];
	echo"<br>";
}
echo '</ul>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

	$food_assoc = [
	  "pizza" => [
	    "type" => "main course",
	    "origin" => "Italy"
	  ],
	  "cheesesake" => [
	    "type" => "desert",
	    "origin" => "Greece"
	  ]
	]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc = [
"name" => "pizza",
"type" => "main course",
"origin" => "Italy"
];


echo $food_assoc['name']. " | " . $food_assoc['type'] . " | " . $food_assoc['origin'];
echo "<br>";

$food_assoc = [
	"name" => "cheesecake",
"type" => "desert",
"origin" => "Greece"
];

echo $food_assoc['name']. " | " . $food_assoc['type'] . " | " . $food_assoc['origin'];
echo "<br>";

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/


/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/


// $food_assc = [
// "name" => "pizza",
// "type" => "main course",
// "origin" => "Italy"
// ],
// [
// 	"name" => "cheesecake",
// "type" => "desert",
// "origin" => "Greece"
// ];

// echo "<ul>";
// for($x = 0; $x < sizeof($food_assc); $x++){

// 	echo"<li>
// 			<ul>";
// for($y=0; $y < sizeof($food_assc[$x]; $y++) ) {
// 	echo "<li>{$food_assc[$x][$y]}</li>";
// }
// 	echo " </ul>
// 	</li>";
// }
// echo "</ul";


$food_assc = [
"pizza" => 
["type: main course","origin: Italy"],
"cheesecake" => 
["type: dessert","origin: Greece"]];




echo "<ul>";
foreach ($food_assc as $y => $v) {
	echo"<li>$y:
	        <ul>";

 for($i = 0;$i < sizeof($v); $i++){
 	echo "<li>{$v[$i]}</li>";
 }


	 echo"</ul>
	     </li>";
}

echo"</ul>";




?>