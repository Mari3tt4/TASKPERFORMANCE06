<?php

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Process form submission

    // For example, you might perform some processing specific to form submission here
    // ...

    // Insert data into MySQL table
    $sql = "INSERT INTO your_table_name (last_name, first_name, middle_initial, age, contact_no, email, address)
            VALUES ('" . $formInfo->getLastName() . "', '" . $formInfo->getFirstName() . "', '" . $formInfo->getMiddleInitial() . "', 
            '" . $formInfo->getAge() . "', '" . $formInfo->getContactNo() . "', '" . $formInfo->getEmail() . "', '" . $formInfo->getAddress() . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
