<?php
require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram()
        {
            $test_list = array(

            );
            $test_Anagram = new Anagram;
            foreach ($test_list as $test) {
                //Arrange
                $test_Anagram->checkAnagram();
                //Act
                $result = $test_Anagram->checkAnagram();
                //Assert
                $this->AssertEquals(, $result);
            }
        }
    }
 ?>
