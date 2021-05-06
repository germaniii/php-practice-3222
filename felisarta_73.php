<!FELISARTA, German III E  16101002 CpE 3222>
<html>
<head>
    <title> 7-3 Address Book</title>
    <meta name = "keywords" content = "German, Felisarta, PHP, Practice"> 
    <meta name = "description" content = "This webpage is a practice page for PHP functions">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
        // Instantiate Variables
        session_start();
        if(empty($_SESSION['fName_arr']) && empty($_SESSION['lName_arr']) && empty($_SESSION['contact_arr'])
                                            && empty($_SESSION['brgy_arr']) && empty($_SESSION['city_arr'])){

            $_SESSION['fName_arr'] = array();       // FirstName Array
            $_SESSION['lName_arr'] = array();       // LastName Array
            $_SESSION['contact_arr'] = array();     // Contact Num Array
            $_SESSION['brgy_arr'] = array();        // Brgy Array
            $_SESSION['city_arr'] = array();        // City Array
            $fName_arr = array();
            $lName_arr = array();
            $contact_arr = array();
            $brgy_arr = array();
            $city_arr    = array();

        }


        if(isset($_POST['submit_form'])){
            //Appending to Session (main) array
            array_push($_SESSION['fName_arr'], $_POST['fName']);
            array_push($_SESSION['lName_arr'], $_POST['lName']);
            array_push($_SESSION['contact_arr'], $_POST['contact']);
            array_push($_SESSION['brgy_arr'], $_POST['brgy']);
            array_push($_SESSION['city_arr'], $_POST['city']);
        } 
    ?>
    <h1>7-3 Address Book</h1>
    <h2>German E Felisarta III | 16101002 | CpE 3222</h2>
    <hr>
    <h2>Add Entry</h2>
    <form method="POST">
        <label for="fName">First Name:</label>
        <input type="text" placeholder="Juan" name="fName" id="fName" required><br><br>
        <label for="lName">Last Name:</label>
        <input type="text" placeholder="Cruz"name="lName" id="lName" required><br><br>
        <label for="contact">Contact No.: +63</label>
        <input type="tel" placeholder="9xxxxxxxxx"name="contact" id="contact" pattern="9[0-9]{2}[0-9]{3}[0-9]{4}" required><br><br>
        <label for="brgy">Baranggay:</label>
        <input type="text" placeholder="Guadalupe"name="brgy" id="brgy" required><br><br>
        <label for="n">City:</label>
        <input type="text" placeholder="Cebu"name="city" id="city" required><br><br>
        <input type="submit" name="submit_form" value="Submit">
    </form>
    <hr>
    <h2>Search</h2>
    <form method="POST">
        <input type="text" placeholder="Juan" name="fName_search" id="fName_search">
        <input type="submit" name="fName_button" value="Search First Name"><br><br>
        <input type="text" placeholder="Cruz" name="lName_search" id="lName_search">
        <input type="submit" name="lName_button" value="Search Last Name"><br><br>
        <input type="text" placeholder="Guadalupe"name="brgy_search" id="brgy_search">
        <input type="submit" name="brgy_button" value="Search Baranggay"><br><br>
        <input type="text" placeholder="Cebu"name="city_search" id="city_search">
        <input type="submit" name="city_button" value="Search City"><br><br>
    </form>
    <?php
        $search_arr = array();
        if(isset($_POST['fName_button'])){                      // Search First Name
            foreach ($_SESSION['fName_arr'] as $name){
                if($name ==  $_POST['fName_search']){

                }
            }

        }elseif(isset($_POST['lName_button'])){                 // Search Last Name

        }elseif(isset($_POST['brgy_button'])){                  // Search Baranggay

        }elseif(isset($_POST['city_button'])){                  // Search City

        }
    
    ?>

    <br><br><br>
    <form method="POST">
        <input type="submit" name="clear_arr" value="Reset Address Book">
    </form>

    <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
    ?>
    <?php
        // Destroy Instances
        if(isset($_POST['clear_arr'])){
            session_destroy();
        }
    ?>
</body>
</html>