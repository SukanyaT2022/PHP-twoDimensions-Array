<!-- student have 3 subject and score --2 dimensions -->

<?php
$mark = array(
array(30,40,60), 
//for one student 30 in math 40 in science and 60 in english
//use position start with 0 1 2
array(20,50,90), 
//for next student
array(50,80,70), 
//for last students

);

echo $mark[1][2]; 
// we call row one means student 1  on top and position 2 which means score from english class
// it will show 90



?>