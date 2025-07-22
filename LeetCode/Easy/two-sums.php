<?php

/* Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

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
*/

class TwoSums
{
    public array $nums = [];
    public function sums()
    {
        echo "Write the target:\n";

       $target = fgets(STDIN);

        for ($i = 0; $i < count($this->nums); $i++) {
            for ($i_2 = 0; $i_2 < count($this->nums); $i_2++) {
                if ($i != $i_2) {
                    $sum = $this->nums[$i] + $this->nums[$i_2];
                    echo "Sum of {$this->nums[$i]} and {$this->nums[$i_2]} is: $sum\n";
                }
            }
        }

        echo "The sum is: ".$sum.".\n";
        if ($sum == $target) {
            echo "The Numbers that equal the target are: \n";

            foreach ($this->nums as $num) {
                echo $num;
            }
        } else {
            echo "There's no numbers entered that equals the target";
        }

    }

    public function saveNumbers()
    {
        $input = fgets(STDIN);

        for ($i = 0; $i <= $input; $i++) {
            echo "Write a Number:\n";

            $number = fgets(STDIN);

            $this->nums[] = $number;
        }

        echo "This are the numbers:\n";

        foreach ($this->nums as $num) {
            echo $num;
        }
    }
    public function messageWelcome(): void
    {
        echo "This program will ask you to write numbers and then a target and return the sums of the number that will be the equal of the target.\n";
        echo "How many numbers do you want to enter?\n";
    }
}

$instance = new TwoSums();

$instance->messageWelcome();

$instance->saveNumbers();

$instance->sums();

