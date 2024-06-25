<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function isPalindrome(string $input): bool
{
    // Normalize the string: remove non-alphanumeric characters and convert to lowercase
    $normalizedString = preg_replace('/[^a-zA-Z0-9]/', '', $input);
    $normalizedString = strtolower($normalizedString);

    // Check if the normalized string is the same forwards and backwards
    $reversedString = strrev($normalizedString);

    return $normalizedString === $reversedString;
}

// Example :
$inputString = "A man, a plan, a canal, Panama!";
if (isPalindrome($inputString)) {
    echo "'$inputString' is a palindrome.";
} else {
    echo "'$inputString' is not a palindrome.";
}


     ?>
  </body>
</html>
