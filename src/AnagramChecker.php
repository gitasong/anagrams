<!-- Validation
The program will reject invalid user input.

Core Program Behavior
The program will return true if a single word is an anagram of a single-letter word.

The program will return true if a single word is an anagram of a multi-letter word.

The program will return one word from a list that are anagrams of a multi-letter word.

The program will return all the words from a list that are anagrams of a multi-letter word. -->


<?php
    class AnagramChecker
    {
        // function validate($word)
        // {
        //     if (empty($word)) {
        //         $validate = false;
        //     } else {
        //         if (strpbrk($word," ")) {
        //             $validate = false;
        //         } else {
        //             if (!(ctype_alpha($word))) {
        //                 $validate = false;
        //             } else {
        //                 $validate = true;
        //             }
        //         }
        //     }
        // return $validate;
        // }

        // validate with switch-like sequence of ifs
        function validate($word)
        {
            $validate = true;
            if (empty($word)) {
                $validate = false;
            }

            if (strpbrk($word, " ")) {
                $validate = false;
            }

            if (!(ctype_alpha($word))) {
                $validate = false;
            }
            return $validate;
        }

        // function isAnagram($word, $comparison)
        // {
        //     $split_word = str_split($word);
        //     $split_comparison = str_split($comparison);
        //     $sorted_word = sort($split_word);
        //     $sorted_comparison = sort($split_comparison);
        //     if ($sorted_word == $sorted_comparison) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        function isAnagram($word, $comparison)
        {
            // for each word in array, execute existing block
            for ($item = 0; $item < sizeof($comparison); $item++) {
                $results = [];
                $split_word = str_split($word);
                $split_item = str_split($item);
                $sorted_word = sort($split_word);
                $sorted_item = sort($split_item);
                if ($sorted_word == $sorted_item) {
                    array_push($results, $comparison[$item]);
                } else {
                    array_push($results, false);
                }
            }
            return $results;
        }
    }
?>
