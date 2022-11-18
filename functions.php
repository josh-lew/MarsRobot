<?php
/**
 * Determines the Robots X co-ordinant via a foreach loop through the instructions array 
 *
 * @param array $instructionsArray
 * @param integer $gridX
 * @param integer $gridY
 * @return integer 
 */
function determineRobotX(array $instructionsArray,int $gridX,int $gridY): int
{
    $robotX = 1;
    $robotY = 1;
    $robotDirection = 'North';

    foreach ($instructionsArray as $value) {
        if ($value == 'L') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'West';
                break;
                case 'East':
                    $robotDirection = 'North';
                break;
                case 'South':
                    $robotDirection = 'East';
                break;
                case 'West':
                    $robotDirection = 'South';
                break;
            }
        } elseif ($value == 'R') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'East';
                break;
                case 'East':
                    $robotDirection = 'South';
                break;
                case 'South':
                    $robotDirection = 'West';
                break;
                case 'West':
                    $robotDirection = 'North';
                break;
            }
        } elseif ($value == 'F') {
            if($robotDirection == 'North' && $robotY < $gridY){
                $robotY += 1;
            } elseif ($robotDirection == 'East' && $robotX < $gridX){
                $robotX += 1;
            } elseif ($robotDirection == 'South' && $robotY > 1){
                $robotY -= 1;
            } elseif ($robotDirection == 'West' && $robotX > 1){
                $robotX -= 1;
            } 
        } 
    }  return $robotX;
}

/**
 * Determines the Robots Y co-ordinant via a foreach loop through the instructions array 
 *
 * @param array $instructionsArray
 * @param integer $gridX
 * @param integer $gridY
 * @return integer
 */

function determineRobotY(array $instructionsArray,int $gridX,int $gridY): int
{
    $robotX = 1;
    $robotY = 1;
    $robotDirection = 'North';

    foreach ($instructionsArray as $value) {
        if ($value == 'L') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'West';
                break;
                case 'East':
                    $robotDirection = 'North';
                break;
                case 'South':
                    $robotDirection = 'East';
                break;
                case 'West':
                    $robotDirection = 'South';
                break;
            }
        } elseif ($value == 'R') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'East';
                break;
                case 'East':
                    $robotDirection = 'South';
                break;
                case 'South':
                    $robotDirection = 'West';
                break;
                case 'West':
                    $robotDirection = 'North';
                break;
            }
        } elseif ($value == 'F') {
            if($robotDirection == 'North' && $robotY < $gridY){
                $robotY += 1;
            } elseif ($robotDirection == 'East' && $robotX < $gridX){
                $robotX += 1;
            } elseif ($robotDirection == 'South' && $robotY > 1){
                $robotY -= 1;
            } elseif ($robotDirection == 'West' && $robotX > 1){
                $robotX -= 1;
            } 
        } 
    }  return $robotY;
}

/**
 * Determines the final direction that the Robots is facing using a foreach loop running through the instructions array. 
 *
 * @param array $instructionsArray
 * @param integer $gridX
 * @param integer $gridY
 * @return integer
 */
function determineRobotDirection(array $instructionsArray,int $gridX,int $gridY): string
{
    $robotX = 1;
    $robotY = 1;
    $robotDirection = 'North';

    foreach ($instructionsArray as $value) {
        if ($value == 'L') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'West';
                break;
                case 'East':
                    $robotDirection = 'North';
                break;
                case 'South':
                    $robotDirection = 'East';
                break;
                case 'West':
                    $robotDirection = 'South';
                break;
            }
        } elseif ($value == 'R') {
            switch($robotDirection){
                case 'North':
                    $robotDirection = 'East';
                break;
                case 'East':
                    $robotDirection = 'South';
                break;
                case 'South':
                    $robotDirection = 'West';
                break;
                case 'West':
                    $robotDirection = 'North';
                break;
            }
        } elseif ($value == 'F') {
            if($robotDirection == 'North' && $robotY < $gridY){
                $robotY += 1;
            } elseif ($robotDirection == 'East' && $robotX < $gridX){
                $robotX += 1;
            } elseif ($robotDirection == 'South' && $robotY > 1){
                $robotY -= 1;
            } elseif ($robotDirection == 'West' && $robotX > 1){
                $robotX -= 1;
            } 
        } 
    }  return $robotDirection;
}

/**
 * Comines the robots x,y co-ordinantes and direction faced into a string to be printed.
 *
 * @param integer $x
 * @param integer $y
 * @param string $direction
 * @return string
 */
function combineToString(int $x, int $y, string $direction): string {
    $location = [];

    $location[] += $x;
    $location[] += $y;
    $location[] = $direction;
    
    $finalOutput = implode(',', $location);

    return $finalOutput;
}



