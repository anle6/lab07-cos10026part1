<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
     <title>My First PHP</title>
     <head>
<body?>
    <h1>PHP variables</h1>
<?php
$marks = [85, 85, 95];
$marks[1] = 90;

$ave = array_sum($marks) / count($marks);

if ($ave >= 50) {
    $status = "PASSED";
} else {
    $status = "FAILED";
}

echo "Average: " . $ave . "<br>";
echo "Status: " . $status;
?>
</body>
</html>