<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountRepeatsCharValid()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "fe53#";
            $input2 = "bfd437&";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals("Please enter letters only!", $result);
        }
    }
?>
