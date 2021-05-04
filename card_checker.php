<?php
        $credit_card_number = $_POST['cc_num'];   
        $validity = "";
        echo "Your input ", "$credit_card_number";

            if(preg_match("/[a-z]/i", $credit_card_number)){
                $validity = "Invalid";
            }else{
                //checks if card number is correct
                if(strlen($credit_card_number) >= 16){                                                        // checks if there is enough characters in the string which is 16
                    $space = explode(" ", $credit_card_number);
                    $dash = explode("-", $credit_card_number);                                                // splits string into 4 sets separated by dash
                    $spacedash = explode(" - ", $credit_card_number); 
                    
                    if(is_numeric($credit_card_number) && strlen($credit_card_number) == 16){ // if all numbers and length is exactly 16, valid
                        $validity = "Valid";
                    }else if($spacedash != $credit_card_number){                                               // if string has space dash
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
                        }else $validity = "Invalid";
                    }
                    
                    if($space != $credit_card_number && $validity == "Invalid"){                                                   // if string has spaces only
                        if(sizeof($space) == 4){
                            for($i = 0; $i < 4; $i++){
                                if (strlen($space[$i]) == 4 && is_numeric($space[$i]))
                                    $validity = "Valid";
                                else $validity = "Invalid";
                            }
                        }else $validity = "Invalid";

                    }

                }else $validity = "Invalid";
            }

        echo " is ", $validity, ".";
?>