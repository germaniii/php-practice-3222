<?php
        $credit_card_numbers = array("1234-5678-9101-1213", "1234 - 5678 - 9101 - 1213", "1234567891011213", "1234  5678 9101  1213",  // these are valid inputs
                                    "1234 5678 9101", "1234-5678 -9101- 1221", "1234-5122-512", "123 - 412 -4212", "123  12323 123");   // these are invalid inputs
        $array_counter = 0;
        $validity = "";
        echo "<table>
                <tr>
                    <td>Credit Card Number</td>
                    <td>Validity</td>  
                </tr>
                <tr>";
                    for($array_counter; $array_counter < count($credit_card_numbers); $array_counter++){
                        echo "<td>",$credit_card_numbers[$array_counter], "</td>";                                                      // print the card number column

                        //checks if card number is correct
                        if(strlen($credit_card_numbers[$array_counter]) >= 16){                                                        // checks if there is enough characters in the string which is 16
                           $space = explode(" ", $credit_card_numbers[$array_counter]);
                           $dash = explode("-", $credit_card_numbers[$array_counter]);                                                // splits string into 4 sets separated by dash
                           $spacedash = explode(" - ", $credit_card_numbers[$array_counter]); 

                            if(is_numeric($credit_card_numbers[$array_counter]) && strlen($credit_card_numbers[$array_counter]) == 16){ // if all numbers and length is exactly 16, valid
                                $validity = "Valid";
                            }else if($spacedash != $credit_card_numbers[$array_counter]){                                               // if string has space dash
                                if (sizeof($spacedash) == 4){
                                    for($i = 0; $i < 4; $i++){
                                        if (strlen($spacedash[$i]) == 4 && is_numeric($spacedash[$i]))
                                            $validity = "Valid";
                                        else $validity = "Invalid";
                                    }
                                }else if(sizeof($dash) == 4){                                                                           // if string has dash only
                                    for($i = 0; $i < 4; $i++){
                                        if (strlen($dash[$i]) == 4 && is_numeric($dash[$i])){
                                            $validity = "Valid";
                                        }else $validity = "Invalid";
                                    }
                                }
                            }else if($space != $credit_card_numbers[$array_counter]){                                                   // if string has spaces only
                                if(sizeof($space) == 4){
                                    for($i = 0; $i < 4; $i++){
                                        if (strlen($space[$i]) == 4 && is_numeric($space[$i]))
                                            $validity = "Valid";
                                        else $validity = "Invalid";
                                    }
                                }

                            }

                        }else $validity = "Invalid";

                        echo "<td>", $validity, "</td></tr>";
                    }

        echo "</table>";
?>