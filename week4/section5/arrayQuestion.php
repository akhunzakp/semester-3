<?php

$students = [
    ['name' => 'Alice', 'score' => 85],
    ['name' => 'Bob', 'score' => 92],
    ['name' => 'Charlie', 'score' => 78],
    ['name' => 'David', 'score' => 64],
    ['name' => 'Eva', 'score' => 90]
];

$average = array_sum(array_column($students, 'score')) / count($students);

echo "Student who achieved more than the average score:<br>";

foreach ($students as $student) {
    if ($student['score'] > $average) {
        echo $student['name'] ." ". $student['score'] . "<br>";
    }
}