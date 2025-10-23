"""
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
    Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]


Constraints:

2 <= nums.length <= 104
-109 <= nums[i] <= 109
-109 <= target <= 109
Only one valid answer exists.

"""
from attr.setters import convert


class TwoSums:
    MESSAGE: str = "This program will ask you to write numbers and a target to sum two numbers that you wrote that match the given target."


    def __init__(self):
        self.numbers: list[int] = []
        self.num: int | None = None
        self.condition: int | None = None
        self.target: int | None = None
        self.result: int | None = None
        self.flag: bool = False
        self.pair: list[int] = []

        print("Write the numbers you want: \n Write 0 to exit.")

        while self.condition != 0:
            self.num = self.convert_to_int(input().strip())
            self.numbers.append(self.num)

            if self.num == 0:
                self.condition = self.num
                self.numbers.remove(self.num)

        print("Write the target: ")

        self.target = self.convert_to_int(input().strip())

        for num in self.numbers:
            for num_2 in self.numbers:
                self.result = self.sum(num, num_2)

                if self.target == self.result:
                    self.set_pair_of_target(num, num_2)
                    self.flag = True
                    break
            if self.flag: break

        print("The target is:", self.target, "and the pair of numbers summed was:", self.pair)


    @staticmethod
    def convert_to_int(selection: str) -> int:
        return int(selection)

    @staticmethod
    def sum(num: int, num_2: int) -> int:
        return num + num_2

    def set_pair_of_target(self,num: int, num_2: int):
        self.pair.append(num)
        self.pair.append(num_2)

TwoSums()