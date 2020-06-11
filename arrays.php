<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array("pizza", "cake", "smoothie", "pie");

/*
Print every array element in a new line.
*/

echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];
echo "<br>";





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo '<ul>';
echo '<li>' . implode( '</li><li>', $food) . '</li>';
echo '</ul>';



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc = array(

	"pizza" => "main course",
	"cake" => "dessert",
	"smoothie" => "dessert",
	"pie" => "dessert"
);
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $food => $food_assoc) {
	echo "$food | $food_assoc<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
// $origin = array(

// 	"pizza" => "Italy",
// 	"cake" => "Spain",
// 	"smoothie" => "Mexico",
// 	"pie" => "USA"
// );

$food_asso[$food[0]] = ["type" => "main course", "origin" => "Italy"];
$food_asso[$food[1]] = ["type" => "dessert", "origin" => "Greece"];
$food_asso[$food[2]] = ["type" => "dessert", "origin" => "Spain"];
$food_asso[$food[3]] = ["type" => "dessert", "origin" => "Artic"];



/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food[0]." | ". $food_asso[$food[0]]["type"]." | ". $food_asso[$food[0]]["origin"];
echo "<br>";
echo $food[1]." | ". $food_asso[$food[1]]["type"]." | ". $food_asso[$food[1]]["origin"];
echo "<br>";
echo $food[2]." | ". $food_asso[$food[2]]["type"]." | ". $food_asso[$food[2]]["origin"];
echo "<br>";
echo $food[3]." | ". $food_asso[$food[3]]["type"]." | ". $food_asso[$food[3]]["origin"];



// task separator
echo "<hr style=\"margin 1rem 0\">";




?>

<!-- +---+
| 5 |
+---+
Print the array from task 4 in html table: -->
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
    <tr>
    <td>smoothie</td>
    <td>desert</td>
    <td>Spain</td>
  </tr>
    <tr>
    <td>pie</td>
    <td>desert</td>
    <td>Artic</td>
  </tr>
</table>
