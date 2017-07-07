<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountRepeatsSingleLetter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input_check = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input_check);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testCountRepeatsSingleWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "dog";
            $input_check = "dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input_check);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testCountRepeatsMultipleWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "dog";
            $input_check = "its a dog eat dog world";

            //Act
            $result = $test_RepeatCounter->countRepeats($input1, $input_check);

            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
