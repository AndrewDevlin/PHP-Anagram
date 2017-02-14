<?php
require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram()
        {
            $test_list = array(

            );
            $test_Anagram = new Anagram;
                //Arrange
                $input1 = "bob";
                $input2 = "bbo";
                $test_Anagram->checkAnagram($input1, $input2);
                //Act
                $result = $test_Anagram->checkAnagram($input1, $input2);
                //Assert
                $this->AssertEquals(true, $result);
        }
    }
 ?>
