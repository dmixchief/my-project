<?php
function is_anagram($a, $b)
 {
       if (count_chars($a, 1) == count_chars($b, 1))
    {
        return "This two strings are anagram";
    }
    else
    {
        return "This two strings are not anagram";
    }
 }
print_r(is_anagram('cat','bat')."\n");
print_r(is_anagram('cautioned','education')."\n");
?>
