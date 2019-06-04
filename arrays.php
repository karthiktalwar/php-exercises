<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$food = ["hamSlider", "chickenSoup", "beefSteak", "chocolateSundae"];
echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];

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
echo "<ul>
<li>$food[0]</li>
<li>$food[1]</li>
<li>$food[2]</li>
<li>$food[3]</li>
</ul>";

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

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
    $food[0] => "appetiser",
    $food[1] => "soup",
    $food[2] => "mainCourse",
    $food[3] => "dessert"
];

echo $food[0] . " | " . $food_assoc[$food[0]] . "<br>";
echo $food[1] . " | " . $food_assoc[$food[1]] . "<br>";
echo $food[2] . " | " . $food_assoc[$food[2]] . "<br>";
echo $food[3] . " | " . $food_assoc[$food[3]];

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

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = [
    "hamSlider" => [
        "type" => "appetiser",
        "origin" => "England",
    ],
    "chickenSoup" => [
        "type" => "soup",
        "origin" => "China",
    ],
    "beefSteak" => [
        "type" => "mainCourse",
        "origin" => "America",
    ],
    "chocolateSundae" => [
        "type" => "dessert",
        "origin" => "France",
    ]
];

foreach($food_assoc as $k => $v) {
    echo $k;
    foreach ($v as $p => $u){
        echo " | ";
        echo $u;
    }
    echo "<br>";
}    

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:

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
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            border-spacing: 0;
        }

        td,
        th {
            padding: 6px 13px;
        }

    </style>
</head>

<body>
    <table>
        <tr>
            <th>
                food
            </th>
            <th>
                type
            </th>
            <th>
                origin
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $food[0]; ?>
            </td>
            <td>
                <?php echo $food_assoc["hamSlider"]["type"]; ?>
            </td>
            <td>
                <?php echo $food_assoc["hamSlider"]["origin"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $food[1]; ?>
            </td>
            <td>
                <?php echo $food_assoc["chickenSoup"]["type"]; ?>
            </td>
            <td>
                <?php echo $food_assoc["chickenSoup"]["origin"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $food[2]; ?>
            </td>
            <td>
                <?php echo $food_assoc["beefSteak"]["type"]; ?>
            </td>
            <td>
                <?php echo $food_assoc["beefSteak"]["origin"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $food[3]; ?>
            </td>
            <td>
                <?php echo $food_assoc["chocolateSundae"]["type"]; ?>
            </td>
            <td>
                <?php echo $food_assoc["chocolateSundae"]["origin"]; ?>
            </td>
        </tr>
    </table>
</body>

</html>
