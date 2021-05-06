<?php
    session_start();
    $fName_arr = $_SESSION['fName_arr'];
    $lName_arr = $_SESSION['lName_arr'];
    $contact_arr = $_SESSION['contact_arr'];
    $brgy_arr = $_SESSION['brgy_arr'];
    $city_arr = $_SESSION['city_arr'];

    array_push($fName_arr, $_POST['fName']);
    array_push($lName_arr, $_POST['lName']);
    array_push($contact_arr, $_POST['contact']);
    array_push($brgy_arr, $_POST['brgy']);
    array_push($city_arr, $_POST['city']);

    $_SESSION['fName_arr'] = $fName_arr;
    $_SESSION['lName_arr'] = $lName_arr;
    $_SESSION['contact_arr'] = $contact_arr;
    $_SESSION['brgy_arr'] = $brgy_arr;
    $_SESSION['city_arr'] = $city_arr;

    if(isset($_POST['Submit'])){
        echo "<pre>";
        print_r($_POST);
        print_r($_SESSION);
        echo "</pre>";
    } 
?>
<