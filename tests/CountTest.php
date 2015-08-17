<?php

    require_once "src/Count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {

          function test_makeCountMatch_singleLetter()
          {

                //Arrange
                $test_makeCountMatch = new Count;
                $input_word = "a";
                $input_string = ["a"];

                //Act
                $result - $test_makeCountMatch->makeCountMatch($input_word, $input_string);

                //Assert
                $this->assertEquals(["1"], $result);
          }
    }
?>
