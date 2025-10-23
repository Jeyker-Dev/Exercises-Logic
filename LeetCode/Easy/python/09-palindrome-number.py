"""
Given
an
integer
x,
return true if x is a
palindrome, and false
otherwise.

Example
1:

Input: x = 121
Output: true
Explanation: 121
reads as 121
from left to

right and
from right to

left.
Example
2:

Input: x = -121
Output: false
Explanation: From
left
to
right, it
reads - 121.
From
right
to
left, it
becomes
121 -.Therefore
it is not a
palindrome.
Example
3:

Input: x = 10
Output: false
Explanation: Reads
01
from right to

left.Therefore
it is not a
palindrome.

Constraints:

-231 <= x <= 231 - 1
"""
class PalindromeNumber:
    MESSAGE: str = ("This program will ask you to write a number and tell if the number is a palindrome."
                    "\n Write a number please it must be a number of more than one digit:")

    def __init__(self):
        self.number: int | str = ""
        self.reversed_number: str | int = ""

        print(self.MESSAGE)

        self.number = input().strip()

        self.reversed_number = self.number[::-1]

        self.number = self.convert_to_int(self.number)
        self.reversed_number = self.convert_to_int(self.reversed_number)

        if self.number == self.reversed_number:
            print("The number", self.number, "reversed its", self.reversed_number, "\nIts Palindrome")
        else: print("Its not Palindrome.")

    @staticmethod
    def convert_to_int(num: str) -> int:
        return int(num)




PalindromeNumber()