# PHP Loose Comparison Bug

This repository demonstrates a common bug in PHP related to loose comparison (==) of different data types.  Loose comparison does type coercion, which can lead to unexpected results and make debugging harder.

The `bug.php` file contains code exhibiting this issue. The `bugSolution.php` file shows the corrected code using strict comparison (===).