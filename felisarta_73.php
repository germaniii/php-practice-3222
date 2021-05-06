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

        }


        if(isset($_POST['submit_form'])){
            //Appending to Session (main) array
            array_push($_SESSION['fName_arr'], strtolower($_POST['fName']));
            array_push($_SESSION['lName_arr'], strtolower($_POST['lName']));
            array_push($_SESSION['contact_arr'], strtolower($_POST['contact']));
            array_push($_SESSION['brgy_arr'], strtolower($_POST['brgy']));
            array_push($_SESSION['city_arr'], strtolower($_POST['city']));
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
        // this php is for search feature
        $search_index = array();
        $temp_fName_array = $_SESSION['fName_arr'];
        $temp_lName_array = $_SESSION['lName_arr'];
        $temp_contact_array = $_SESSION['contact_arr'];
        $temp_brgy_array = $_SESSION['brgy_arr'];
        $temp_city_array = $_SESSION['city_arr'];

        if(isset($_POST['fName_button'])){                      // Search First Name
            $search_index = array_keys($_SESSION['fName_arr'], strtolower($_POST['fName_search']));
            echo "<h3>Search Results for " . $_POST['fName_search']. ":</h3>";

        }elseif(isset($_POST['lName_button'])){                 // Search Last Name
            $search_index = array_keys($_SESSION['lName_arr'], strtolower($_POST['lName_search']));
            echo "<h3>Search Results for " . $_POST['lName_search']. ":</h3>";
            

        }elseif(isset($_POST['brgy_button'])){                  // Search Baranggay
            $search_index = array_keys($_SESSION['brgy_arr'], strtolower($_POST['brgy_search']));
            echo "<h3>Search Results for " . $_POST['brgy_search']. ":</h3>";

        }elseif(isset($_POST['city_button'])){                  // Search City
            $search_index = array_keys($_SESSION['city_arr'], strtolower($_POST['city_search']));
            echo "<h3>Search Results for " . $_POST['city_search']. ":</h3>";

        }

        $counter = 1;
        foreach($search_index as $index){
            echo "[" . $counter . "] "; 
            echo $temp_lName_array[$index] . ", " . $temp_fName_array[$index] . " | ";
            echo "0" . $temp_contact_array[$index] . " | " . $temp_brgy_array[$index] . ", " . $temp_city_array[$index];
            echo "<br>";
            $counter++;
        }

    
    ?>
    <hr>
    <h2>Delete</h2>
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