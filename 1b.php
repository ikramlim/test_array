<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php
            $numberArray = array(
                array(5, 9, 4, 8),
                array(2, 6, 3, 7, 5)
            );
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
