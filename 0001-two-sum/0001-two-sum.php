class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numMap = [];

    // Loop through the array
    foreach ($nums as $i => $num) {
        // Calculate the complement
        $complement = $target - $num;

        // Check if the complement is already in the associative array
        if (array_key_exists($complement, $numMap)) {
            // Return the indices of the complement and current number
            return [$numMap[$complement], $i];
        }

        // Store the current number with its index in the associative array
        $numMap[$num] = $i;
    }
    }
}