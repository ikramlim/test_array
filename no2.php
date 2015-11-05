

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
        } else {
            $n1 = 0;
            $n2 = 0;
        }
        
        function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
            $numbers = range($min, $max);
            shuffle($numbers);
            return array_slice($numbers, 0, $quantity);
        }

        $numberArray = array(
            UniqueRandomNumbersWithinRange(1, 10, $n1),
            UniqueRandomNumbersWithinRange(1, 10, $n2))
        ?>            
        <form action="" method="post">

            <input type="text" name="num1" placeholder="value 1"><br>
            <input type="text" name="num2" placeholder="value 2"><br>
            <input type="submit" name="submit">
        </form> 	
        <?php
        printTable($numberArray); //panggilan function apa yg nk tunjuk

        function printTable($numberArray) {
            // Placeholder
            $result = [];

            // Setup the multiply
            foreach ($numberArray[1] as $key1 => $value1) {
                $tmp = array($value1); // add index y-axis
                foreach ($numberArray[0] as $key0 => $value0) {
                    $tmp[] = $value0 * $value1;
                }
                $result[] = $tmp;
            }

            // Add index the x-axis
            array_unshift($result, array_merge(array(" "), $numberArray[0]));

            // display the result into table form
            echo "<table border='1' align='center'>";
            foreach ($result as $key => $value) {
                echo "<tr>";
                foreach ($value as $k => $v) {
                    if ($k == 0 || $key == 0) {
                        echo sprintf("<td><b>%s</b></td>", $v);
                        continue;
                    }
                    echo "<td>$v</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>

    </body>
</html>