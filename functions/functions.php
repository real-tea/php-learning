<?php

// Function to calculate factorial using recursion
function factorial($n) {
    if ($n <= 1) {
        return 1; // Base case: factorial of 0 and 1 is 1
    } else {
        return $n * factorial($n - 1); // Recursive case
    }
}

// Function call
$number = 5;
$result = factorial($number);

// Output: Factorial of 5 is 120
echo "Factorial of $number is $result";

?>


<h1>Another example of function and return calls</h1>

<?php

// Function to calculate area and circumference of a circle
function calculateCircleProperties($radius) {
    // Constants
    $pi = 3.14159;

    // Calculate area
    $area = $pi * pow($radius, 2);

    // Calculate circumference
    $circumference = 2 * $pi * $radius;

    // Return an associative array with results
    return array(
        'area' => $area,
        'circumference' => $circumference
    );
}

// Function call
$radius = 5;
$circleProperties = calculateCircleProperties($radius);

// Output: For a circle with radius 5:
//         Area is 78.53975
//         Circumference is 31.4159
echo "For a circle with radius $radius:<br>";
echo "Area is {$circleProperties['area']}<br>";
echo "Circumference is {$circleProperties['circumference']}";

?>
