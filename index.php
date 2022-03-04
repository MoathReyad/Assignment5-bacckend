<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <style>
        body,input{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $firstNum = $_GET['firstNumber'];
    $secondNum = $_GET['secondtNumber'];
    $action = $_GET['action'];
    $res = '';
   
    if (is_numeric($firstNum) && is_numeric($secondNum)) {
            
        switch ($action) {
            case 'Add':
                $res = $firstNum + $secondNum;
                break;

            case 'Subtract':
                $res = $firstNum - $secondNum;
                break;

            case 'Multiply':
                $res = $firstNum * $secondNum;
                break;

            case 'Divide':
                $res = $firstNum / $secondNum;
                break;  
        }

    }
    ?>
    <h1>PHP - Simple Calculator Program</h1>
    <form method="get" action="">
        <div>
            <input type="text" name="firstNumber" id="firstNumber" value="<?php echo $firstNum; ?>" required="required">
            <label for="firstNumber">First Number</label>
        </div><br>

        <div>
            <input type="text" name="secondtNumber" id="secondtNumber" value="<?php echo $secondNum; ?>" required="required">
            <label for="secondtNumber">Second Number</label><br>
        </div><br>

        <div>
            <input type="text" name="result" id="result" value="<?php echo $res; ?>">
            <label for="result">Result</label>
        </div><br>

        <div>
            <input type="submit" name="action" value="Add">
            <input type="submit" name="action" value="Subtract">
            <input type="submit" name="action" value="Multiply">
            <input type="submit" name="action" value="Divide">
        </div>
    </form>
</body>
</html>