<?php
    class Anagram
    {
        function checkAnagram($first_word, $second_word)
        {
            $first_word_array = str_split($first_word);
            $second_word_array = str_split($second_word);

            if(count($first_word_array) == count($second_word_array)){
                return true;
            }
        }
    }

?>
