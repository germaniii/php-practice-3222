<?php
        $md5_arr = array("f4552671f8909587cf485ea990207f3b", "647bba344396e7c8170902bcf2e15551", "2afe4567e1bf64d32a5527244d104cea");
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
                                }else if(sizeof($dash) == 4){                                                                           // if string has dash
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