<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    function isPalindrome(string $text): bool
 {
   if (empty($text)) {
     throw new InvalidArgumentException('Input string cannot be empty');
   }

   // Remove unwanted characters and convert to lowercase for case-insensitive comparison
   $cleanedText = preg_replace("/\W+/", "", mb_strtolower($text));

   // Check if the cleaned string is the same as its reversed version (ignoring case)
   return $cleanedText === strrev($cleanedText);
 }

 // Example usage with descriptive messages
 $testStrings = [
   "A man, a plan, a canal: Panama",
   "Race car",
   "hello",
   "Madam, I'm Adam",
 ];

 foreach ($testStrings as $testString) {
   try {
     $isPalindrome = isPalindrome($testString);
     $message = "'$testString' is a palindrome: " . ($isPalindrome ? 'Yes' : 'No');
     echo $message . PHP_EOL;
   } catch (InvalidArgumentException $e) {
     echo "Error: " . $e->getMessage() . PHP_EOL;
   }
 }


     ?>
  </body>
</html>
