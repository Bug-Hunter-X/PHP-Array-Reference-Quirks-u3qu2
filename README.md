# PHP Unexpected Array Increment Behavior with Invalid Index and Pass by Reference

This repository demonstrates an uncommon error in PHP related to array manipulation using pass-by-reference and an invalid index.  The function `incrementValue` is designed to increment the value of an array element at a given index. However, when an invalid index is passed, it throws an exception as expected.  The unexpected behavior is the lack of a proper error message when it throws an exception, leading to confusion in debugging.

## Bug Description
When an index outside the array bounds is provided to the function, instead of providing a descriptive error message, it throws a generic exception. This makes it challenging to pinpoint the root cause of the problem without careful inspection.

## Solution
The improved solution uses explicit error handling and provides more user-friendly error messages with information about the incorrect index and array size, facilitating smoother debugging.