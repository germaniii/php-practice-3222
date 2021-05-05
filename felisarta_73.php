<!FELISARTA, German III E  16101002 CpE 3222>
<html>
<head>
    <title> 7-3 Address Book</title>
    <meta name = "keywords" content = "German, Felisarta, PHP, Practice"> 
    <meta name = "description" content = "This webpage is a practice page for PHP functions">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>7-3 Address Book</h1>
    <h2>German E Felisarta III | 16101002 | CpE 3222</h2>
    <hr>
    <h2> Search </h2>
    <form action="arr_db.php" method="post">
        <input id="fname_button" type="button" name="fname_button" value="Search First Name">
        <input type="text" placeholder="Juan" name="fName" id="fname_button" required><br><br>
        <input id="lname_button" type="button" name="lname_button" value="Search Last Name">
        <input type="text" placeholder="Cruz"name="lName" id="lName" ><br><br>
        <input id="contact_button" type="button" name="contact_button" value="Search Contact No.">
        <input type="tel" placeholder="9xx-xxx-xxxx"name="contact" id="contact" pattern="9[0-9]{2}-[0-9]{3}-[0-9]{4}" ><br><br>
        <input id="brgy_button" type="button" name="brgy_button" value="Search Baranggay">
        <input type="text" placeholder="Guadalupe"name="brgy" id="brgy" ><br><br>
        <input id="city_button" type="button" name="city_button" value="Search City">
        <input type="city" placeholder="Cebu"name="city" id="city" ><br><br>
    </form>
    <hr>
    <h2>Add Entry</h2>
    <form action="arr_db.php" method="post">
        <label for="fName">First Name:</label>
        <input type="text" placeholder="Juan" name="fName" id="fName" required><br><br>
        <label for="lName">Last Name:</label>
        <input type="text" placeholder="Cruz"name="lName" id="lName" required><br><br>
        <label for="contact">Contact No.: +63</label>
        <input type="tel" placeholder="9xx-xxx-xxxx"name="contact" id="contact" pattern="9[0-9]{2}-[0-9]{3}-[0-9]{4}" required><br><br>
        <label for="brgy">Baranggay:</label>
        <input type="text" placeholder="Guadalupe"name="brgy" id="brgy" required><br><br>
        <label for="n">City:</label>
        <input type="city" placeholder="Cebu"name="city" id="city" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    <h2>Add Entry</h2>
    <form action="arr_db.php" method="post">
        <label for="fName">First Name:</label>
        <input type="text" placeholder="Juan" name="fName" id="fName" required><br><br>
        <label for="lName">Last Name:</label>
        <input type="text" placeholder="Cruz"name="lName" id="lName" required><br><br>
        <label for="contact">Contact No.: +63</label>
        <input type="tel" placeholder="9xx-xxx-xxxx"name="contact" id="contact" pattern="9[0-9]{2}-[0-9]{3}-[0-9]{4}" required><br><br>
        <label for="brgy">Baranggay:</label>
        <input type="text" placeholder="Guadalupe"name="brgy" id="brgy" required><br><br>
        <label for="n">City:</label>
        <input type="city" placeholder="Cebu"name="city" id="city" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>

</body>
</html>