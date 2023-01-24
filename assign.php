//you can use the StringBuilder class to reverse a string.
public static String reverseString(String str) {
    StringBuilder sb = new StringBuilder(str);
    return sb.reverse().toString();
}

//To find out if two strings are anagrams
//you can convert them to arrays, sort them, and compare them
function isAnagram($str1, $str2) {
    $str1 = str_split($str1);
    sort($str1);
    $str1 = implode($str1);

    $str2 = str_split($str2);
    sort($str2);
    $str2 = implode($str2);

    return ($str1 === $str2);
}

//To find the second-largest number in an array 
//you can use the sort() function and then return the second to last element:
function secondLargest($arr) {
    sort($arr);
    return $arr[count($arr) - 2];
}

//To reverse an array in PHP, you can use the array_reverse() function:
