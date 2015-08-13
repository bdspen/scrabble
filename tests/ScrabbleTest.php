<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scrabbleScore_test_oneLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "a";

            //Act
            $calculatedScore = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals("1", $calculatedScore);
        }
        function test_scrabbleScore_test_two_letter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "if";

            //Act
            $calculatedScore = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals("5", $calculatedScore);
        }

        function test_scrabbleScore_multiple_letters()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "word";

            //Act
            $calculatedScore = $test_Scrabble->scrabbleScore($input);

            //Assert
            $this->assertEquals("8", $calculatedScore);
        }


    }
 ?>
