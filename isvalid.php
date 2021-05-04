<?php
        $md5_arr = array("f4552671f8909587cf485ea990207f3b", "647bba344396e7c8170902bcf2e15551", "2afe4567e1bf64d32a5527244d104cea");
        $array_counter = 0;
        $PIN = "";
        echo "<table>
                <tr>
                    <td>Hash Combination</td>
                    <td>Decrypted PIN</td>  
                </tr>
                <tr>";
                    for($array_counter; $array_counter < count($md5_arr); $array_counter++){                // iterate through each element in the array
                        for($i = 0; $i <= 999; $i++){                                                       // iterate from 000 to 999
                                                                                                            // check md5 for each iteration
                            if(md5("$i", false) == $md5_arr[$array_counter]){                                  // if it matches element in array
                                $PIN = $i;                                                                  // set PIN to $i
                                break;
                             }else{
                                $PIN = "Unable to Decrypt";
                                continue;
                             }

                        }
                        echo "<td>",$md5_arr[$array_counter], "</td>";             
                        echo "<td>", $PIN, "</td></tr>";
                    }

        echo "</table>";
?>