<?php
// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    // Define the vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    // Convert the string to lowercase to make the function case-insensitive
    $str = strtolower($str);
    // Initialize the count
    $count = 0;
    // Loop through each character in the string
    for ($i = 0; $i < strlen($str); $i++) {
        // If the character is a vowel, increment the count
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowelCount = countVowels($string);
    // Reverse the string
    $reversedString = strrev($string);
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
