<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Result #1
    </title>
    <meta charset="UTF-8"/>
</head>
<body>

<h1>Result #1</h1>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["k"]) && trim($_POST["numberList"]) !== "") {
        $numberList=$_POST["numberList"];
        $k=$_POST["k"];
        $numberArray = explode(" ", $numberList);

    }
}

require_once 'Problem.php';
$problem = new Problem();
$result = $problem->numberList($numberArray, $k);
echo "The list of numbers: " . implode(", ", $numberArray) . "<br>";
echo "The k number: $k<br>";
echo "The result: " . ($result ? "true" : "false") . "<br>";
?>
</body>
</html>
