<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Result #2
    </title>
    <meta charset="UTF-8"/>
</head>
<body>

<h1>Result #2</h1>
<?php
if (isset($_POST["submit"])) {
    if ( trim($_POST["numberList"]) !== "") {
        $numberList=$_POST["numberList"];
        $numberArray = explode(" ", $numberList);

    }
}

require_once 'Problem.php';
$problem = new Problem();
$result = $problem->countArray($numberArray);
echo "The list of numbers: " . implode(", ", $numberArray) . "<br>";
echo "The result: " . implode(", ", $result) . "<br>";
?>
</body>
</html>
