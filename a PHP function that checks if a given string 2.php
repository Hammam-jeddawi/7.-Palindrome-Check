<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    function isPalindrome($str) {
        // Remove non-alphanumeric characters and convert to lowercase
        $cleanedStr = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str));

        // Compare the cleaned string with its reverse
        return $cleanedStr === strrev($cleanedStr);
    }

    // Example usage:
    $inputString = "A man, a plan, a canal, Panama";
    if (isPalindrome($inputString)) {
        echo "The input string \"$inputString\" is a palindrome.";
    } else {
        echo "The input string \"$inputString\" is not a palindrome.";
    }

 ?>


  </body>
</html>
