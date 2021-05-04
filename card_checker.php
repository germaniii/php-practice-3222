<?php
        $value_celsius = 0;
        echo "<table>
                <tr>
                    <td>Celsius</td>
                    <td>Fahrenheit</td>
                </tr>

                <tr>";
                    for($value_celsius = 0; $value_celsius <= 100; $value_celsius++){
                        $value_fahrenheit = ((9/5) * $value_celsius) + 32;
                                echo "<td>",$value_celsius, "</td>";
                                echo "<td>", $value_fahrenheit, "</td></tr><tr>";
                    }

        echo "</table>";
?>