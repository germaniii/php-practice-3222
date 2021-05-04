<?php
        $credit_card_numbers = array("1234-5678-9101-1213", "1234 - 5678 - 9101 - 1213", "1234567891011213", "1234  5678  9101  1213",  // these are valid inputs
                                    "1234  5678  9101", "1234-5678 -9101 -1213");   // these are invalid inputs
        $array_counter = 0;
        $validity = "";
        echo "<table>
                <tr>
                    <td>Credit Card Number</td>
                    <td>Validity</td>  
                </tr>
                <tr>";
                    for($array_counter; $array_counter < 6; $array_counter++){
                        echo "<td>",$credit_card_numbers[$array_counter], "</td>";          // print the card number column
                        
                        //checks if card number is correct
                        if(strlen($credit_card_numbers) >= 16){                             // checks if there is enough characters in the string which is 16
                            
                        }else $validity = "Invalid"

                        echo "</tr>";
                    }

        echo "</table>";
?>