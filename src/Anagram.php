<?php
    class Anagram
    {
        function checkAnagram($first_word, $second_word)
        {

            if (count(str_split($first_word)) == count(str_split($second_word)) && (count_chars($first_word, 4) == count_chars($second_word, 4))) {
                return true;
            }
        }
    }
?>
