<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function isPalindrome($inputString) {
        // Normalize the string by removing spaces, punctuation, and converting to lowercase
        $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $inputString));

        // Reverse the normalized string
        $reversedString = strrev($cleanedString);

        // Compare the original string to the reversed string
        return $cleanedString === $reversedString;
    }

    // Example 
    $testString = "A Santa at NASA.";
    if (isPalindrome($testString)) {
        echo "The string \"$testString\" is a palindrome.";
    } else {
        echo "The string is not a palindrome.";
    }



     ?>
  </body>
</html>
