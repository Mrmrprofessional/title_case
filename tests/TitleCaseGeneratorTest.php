<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("The Little Mermaid", $result);

        }

        function test_makeTitleCase_designatedWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf from Brighton Beach", $result);
        }

        function test_makeTitleCase_nonLetterWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "57 beowulf alternative endings!!";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("57 Beowulf Alternative Endings!!", $result);
        }

        function test_makeTitleCase_allUpperCase()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf on the Rocks", $result);
        }

    }

?>
