<!DOCTYPE html>
<html lang="en-gb">
<head>
<title>Mars Robot</title>
</head>

<body>
    <h1>The Mars Robot</h1>
    <div>
        <form action="index.php" method="post">
            <label>Mars Grid: </label>
            <input type="text" name="grid"/><br>
            <label>Robot Instructions </label>
            <input type="text" name="instructions"/><br>
            <input type="submit" name="submit" value="submit"/>
        </form> 
    </div>
</body>

</html>

<?php

require "functions.php";

if(!isset($_POST['submit']))
{
    echo '<br>Welcome to the Mars Robot App, please insert the grid size and instructions for the robot';

} elseif($_POST['grid'] == null || $_POST['instructions'] == null) {

    echo '<br>Please insert the grid size and direction instructions for the robot';

} elseif($_POST['grid'] !== null && $_POST['instructions'] !== null)  {   

    $grid = $_POST['grid'];
    $instructions = strtoupper($_POST['instructions']);
    
    //break $grid into an x and y co-ordinate and store them as separate variables
    $arrGrid = explode('x', $grid, 2);
    $gridX = $arrGrid[0];
    $gridY = $arrGrid[1];

    //turn the instructions string into an array
    $instructionsArray = str_split($instructions);

    //Pass the instructions array into foreach functions to determine individual values for each co-ordinate and the direction the robot is facing.
    $finalX = determineRobotX($instructionsArray, $gridX, $gridY);
    $finalY = determineRobotY($instructionsArray, $gridX, $gridY);
    $finalDirection = determineRobotDirection($instructionsArray, $gridX, $gridY);



    //combine the outcomes as a string to be output.
    $finalOutput = combineToString($finalX, $finalY, $finalDirection);


    //print output.
    echo '<br><h3>' . $finalOutput . '</h3>';

}

