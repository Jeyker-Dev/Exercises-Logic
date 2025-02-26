<?php
/*
You are given a string s.

Your task is to remove all digits by doing this operation repeatedly:

Delete the first digit and the closest non-digit character to its left.
Return the resulting string after removing all digits.

Example 1:

Input: s = "abc"

Output: "abc"

Explanation:

There is no digit in the string.

Example 2:

Input: s = "cb34"

Output: ""

Explanation:

First, we apply the operation on s[2], and s becomes "c4".

Then we apply the operation on s[1], and s becomes "".
*/

class ClearDigits
{
    public function clearString(string $string): string
    {
        while (preg_match('/\d/', $string)) {
            $string = preg_replace_callback('/(\D*)\d/', function ($matches) {
                return substr($matches[1], 0, -1);
            }, $string, 1);
        }
        return $string;
    }
}

echo "Write a string with numbers and this program clears this numbers but only to the left of the numbers.\n";

$string = fgets(STDIN);

$instance = new ClearDigits();

echo 'This is the String without digits to his left: '.$instance->clearString($string);