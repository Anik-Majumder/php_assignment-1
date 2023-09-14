<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Anik's Calculator</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" required><br>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" required><br>

        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p>Please enter valid numbers.</p>";
        } else {
            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p>Division by zero is not allowed.</p>";
                    }
                    break;
                default:
                    echo "<p>Invalid operation selected.</p>";
            }

            if ($operation != "divide" || ($operation == "divide" && $num2 != 0)) {
                echo "<p>Result: $result</p>";
            }
        }
    }
    ?>
</body>
</html>
