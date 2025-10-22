<?php
/*
Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII,
which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for
 four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract
 it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9.
X can be placed before L (50) and C (100) to make 40 and 90.
C can be placed before D (500) and M (1000) to make 400 and 900.
Given a roman numeral, convert it to an integer.

Example 1:

Input: s = "III"
Output: 3
Explanation: III = 3.
Example 2:

Input: s = "LVIII"
Output: 58
Explanation: L = 50, V= 5, III = 3.
Example 3:

Input: s = "MCMXCIV"
Output: 1994
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.


Constraints:

1 <= s.length <= 15
s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
It is guaranteed that s is a valid roman numeral in the range [1, 3999].
*/

class RomanToInteger
{
    public string $romanNumber = "";
    public array $romanNumbers = [];
    public array $separateRomanNumbers = [];
    public array $integerValues = [];

    function welcomeMessage(): void
    {
        echo "Hi! this program will convert a Roman number to a integer.\n";

        echo "Please, enter a roman number:\n";
    }

    function romantoInteger(): void
    {
        $this->romanNumber = fgets(STDIN);

        $this->checkRomanNumber($this->romanNumber);

        $totalValue = $this->sumIntegerValues();

        echo "The Roman number is $totalValue.\n";
    }

    public function checkRomanNumber(string $romanNumber): void
    {
        $romanNumber = $this->clearSpaces($romanNumber);

        $this->separateRomanNumbers = $this->separateString($romanNumber);

        foreach ($this->romanNumbers as $number) {
            foreach ($this->separateRomanNumbers as $separateromanNumber) {
                if ($separateromanNumber === $number) {
                    $integerValue = $this->whichIntegerIs($number);

                    $this->integerValues[] = $integerValue;
                }
            }
        }
    }

    public function whichIntegerIs(string $romanNumber): ?int
    {
        if ($romanNumber === "I") {
            return 1;
        }

        if ($romanNumber === "V") {
            return 5;
        }

        if ($romanNumber === "X") {
            return 10;
        }

        if ($romanNumber === "L") {
            return 50;
        }

        if ($romanNumber === "C") {
            return 100;
        }

        if ($romanNumber === "D") {
            return 500;
        }

        if ($romanNumber === "M") {
            return 1000;
        }

        return null;
    }

    public function sumIntegerValues(): int
    {
        return array_sum($this->integerValues);
    }

    public function separateString(string $romanNumber): array
    {
        return str_split($romanNumber);
    }

    public function fillRomanNumbers(): void
    {
        $this->romanNumbers = ["I", "V", "X", "L", "C", "D", "M"];
    }

    public function clearSpaces(string $romanNumber): string
    {
        return trim($romanNumber);
    }
}

$instance = new RomanToInteger();

$instance->welcomeMessage();
$instance->fillRomanNumbers();
$instance->romantoInteger();