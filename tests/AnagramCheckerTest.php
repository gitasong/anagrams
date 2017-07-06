<!-- Validation
The program will reject invalid user input.

Core Program Behavior
The program will return true if a single word is an anagram of a single-letter word.

The program will return true if a single word is an anagram of a multi-letter word.

The program will return one word from a list that is an anagram of a multi-letter word.

The program will return all the words from a list that are anagrams of a multi-letter word. -->


<?php
    require_once "src/AnagramChecker.php";
    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {
        function test_validate()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            // $input = "";
            // $input = "white space";
            $input = "n0n-@1pha";
            //Act
            $result = $test_AnagramChecker->validate($input);
            //Assert
            $this->assertEquals(false, $result);
        }

        // function test_isAnagram()
        // {
        //     //Arrange
        //     $test_AnagramChecker = new AnagramChecker;
        //     $input = "bread";
        //     $comparison = "beard";
        //     //Act
        //     $result = $test_AnagramChecker->isAnagram($input, $comparison);
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

        function test_isAnagram_array()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "bread";
            $comparison = ["board", "bard", "drab", "beard", "bread"];
            //Act
            $result = $test_AnagramChecker->isAnagram($input, $comparison);
            //Assert
            $this->assertEquals(["beard", "bread"], $result);
        }
    }
?>
