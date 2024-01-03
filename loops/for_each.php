<?php

// Sample array for demonstration
$colors = array("Red", "Green", "Blue", "Yellow");

// foreach loop for arrays
echo "Colors in the array:<br>";
foreach ($colors as $color) {
    // Code to be executed for each element in the array
    echo $color . "<br>";
}

// Output:
// Colors in the array:
// Red
// Green
// Blue
// Yellow



?>

<h1>forEach can also be used for key => value pairs as well</h1>


<?php

// Sample associative array for demonstration
$studentGrades = array(
    "John" => 85,
    "Jane" => 92,
    "Bob"  => 78,
    "Alice" => 95
);

// foreach loop for key-value pairs
echo "Student Grades:<br>";
foreach ($studentGrades as $student => $grade) {
    // Code to be executed for each key-value pair
    echo "$student: $grade<br>";
}

// Output:
// Student Grades:
// John: 85
// Jane: 92
// Bob: 78
// Alice: 95

?>
