<!-- Validation
The program will reject invalid user input.

Core Program Behavior
The program will return true if a single word is an anagram of a single-letter word.

The program will return true if a single word is an anagram of a multi-letter word.

The program will return all the words from a list that are anagrams of a single-letter word.

The program will return all the words from a list that are anagrams of a multi-letter word. -->


<?php
    class AnagramChecker
    {
        function validate($word)
        {
            if (empty($word)) {
                $validate = false;
            } else {
                if (strpbrk($word," ")) {
                    $validate = false;
                } else {
                    if (!(ctype_alpha($word))) {
                        $validate = false;
                    } else {
                        $validate = true;
                    }
                }
            }
        return $validate;
        }
    }
?>
