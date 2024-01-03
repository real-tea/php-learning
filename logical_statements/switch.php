<?php

// Sample variable for demonstration
$day = "Monday";

// Switch statement
switch ($day) {
    case "Monday"://Each case represents a possible value of the $day variable. If a case matches the value of $day, the corresponding code block is executed.
        echo "It's the beginning of the week.";
        break;
    
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a weekday.";
        break;
    
    case "Friday":
        echo "It's almost the weekend!";
        break;
    
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    
    default:
        echo "Invalid day.";
        break; 

        //Remember to use the break statement to exit the switch block after each case to prevent fall-through behavior if not intended.
}

?>
