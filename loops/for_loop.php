<?php

// Sample for loop
for ($i = 1; $i <= 5; $i++) {
    // Code to be executed in each iteration
    echo "Iteration $i<br>";
}

// Output: Iteration 1
//         Iteration 2
//         Iteration 3
//         Iteration 4
//         Iteration 5
?>

<?php

// Function to generate a multiplication table
function generateMultiplicationTable($number, $limit) {
    echo "Multiplication Table for $number:<br>";

    // Using a for loop to generate the table
    for ($i = 1; $i <= $limit; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>";
    }
}

// Generate multiplication table for 7 up to 10 times
generateMultiplicationTable(7, 10);

?>
