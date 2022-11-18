<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class TestFunctions extends TestCase {
    public function testSuccessDetermineRobotX()
    {
        //expected result of the test
        $expected = 3;
        //input for the test to get the result
        $testInput1 = ["R", "F", "F"];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotX($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDetermineRobotX()
    {
        //expected result of the test
        $expected = 1;
        //input for the test to get the result
        $testInput1 = [];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotX($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDetermineRobotX()
    {
        //input for the test to get the result
        $testInput1 = "RFF";
        $testInput2 = 5;
        $testInput3 = 5;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = determineRobotX($testInput1, $testInput2, $testInput3);
    }

    public function testSuccessDetermineRobotY()
    {
        //expected result of the test
        $expected = 4;
        //input for the test to get the result
        $testInput1 = ["F", "F", "F"];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotY($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDetermineRobotY()
    {
        //expected result of the test
        $expected = 1;
        //input for the test to get the result
        $testInput1 = [];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotY($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDetermineRobotY()
    {
        //input for the test to get the result
        $testInput1 = "FFF";
        $testInput2 = 5;
        $testInput3 = 5;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = determineRobotY($testInput1, $testInput2, $testInput3);
    }

    public function testSuccessDetermineRobotDirection()
    {
        //expected result of the test
        $expected = "South";
        //input for the test to get the result
        $testInput1 = ["F", "F", "F", "L", "L", "R", "R", "R", "R"];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotDirection($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDetermineRobotDirection()
    {
        //expected result of the test
        $expected = "North";
        //input for the test to get the result
        $testInput1 = [];
        $testInput2 = 5;
        $testInput3 = 5;
        //run the real function with the input
        $case = determineRobotDirection($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDetermineRobotDirection()
    {
        //input for the test to get the result
        $testInput1 = "FFF";
        $testInput2 = 5;
        $testInput3 = 5;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = determineRobotDirection($testInput1, $testInput2, $testInput3);
    }

    public function testSuccessCombineToString()
    {
        //expected result of the test
        $expected = "2, 3, South";
        //input for the test to get the result
        $testInput1 = 2;
        $testInput2 = 3;
        $testInput3 = "South";
        //run the real function with the input
        $case = combineToString($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureCombineToString()
    {
        //expected result of the test
        $expected = "2, 3, 1";
        //input for the test to get the result
        $testInput1 = 2;
        $testInput2 = 3;
        $testInput3 = 1;
        //run the real function with the input
        $case = combineToString($testInput1, $testInput2, $testInput3);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedCombineToString()
    {
        //input for the test to get the result
        $testInput1 = 2;
        $testInput2 = [2,3];
        $testInput3 = 5;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = combineToString($testInput1, $testInput2, $testInput3);
    }
}