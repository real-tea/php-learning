<?php
    // Global variable $bar declared outside the function
    $bar = "outside";

    // Function definition with a parameter $bar
    function foo($bar){
        // Inside the function, a new local variable $bar is assigned the value "inside"
        $bar = "inside";
        // The local variable $bar is returned
        return $bar;
    }

    // Call the function foo() with the global variable $bar as an argument
    $result = foo($bar);

    // Output the result of the function
    echo "Result: $result";

    // Additional example of using a global variable
    $globalVar = "I am a global variable.";

    // Function that accesses and modifies the global variable
    function modifyGlobalVar() {
        // Access the global keyword to reference the global variable $globalVar
        global $globalVar;
        $globalVar .= " Modified!";
    }

    // Call the function to modify the global variable
    modifyGlobalVar();

    // Output the modified global variable
    echo "<br>Modified Global Variable: $globalVar";
?>
