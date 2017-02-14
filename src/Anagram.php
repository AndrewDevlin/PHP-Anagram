<?php
    class Anagram
    {
        function checkAnagram($first_word, $second_word)
        {
            if ((strlen($first_word) == strlen($second_word)) && (count_chars($first_word, 4) == count_chars($second_word, 4))) {
                return true;
            }
            else
            {
                $first_word_split = str_split($first_word);
                $second_word_split = str_split($second_word);

                foreach ($first_word_split as $key => $letter) {
                    foreach ($second_word_split as $key => $letter2) {
                        if ($letter == $letter2){
                            return "partial";
                            $key++;
                        }
                    }
                }
            }
        }
    }
?>
