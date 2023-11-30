<?php



class FormInfoClass {

    private $lastName;

    private $firstName;

    private $middleInitial;

    private $age;

    private $contactNo;

    private $email;

    private $address;



    public function setLastName($lastName) {

        $this->lastName = $lastName;

    }



    public function getLastName() {

        return $this->lastName;

    }



    public function setFirstName($firstName) {

        $this->firstName = $firstName;

    }



    public function getFirstName() {

        return $this->firstName;

    }



    public function setMiddleInitial($middleInitial) {

        $this->middleInitial = $middleInitial;

    }



    public function getMiddleInitial() {

        return $this->middleInitial;

    }



    public function setAge($age) {

        $this->age = $age;

    }



    public function getAge() {

        return $this->age;

    }



    public function setContactNo($contactNo) {

        $this->contactNo = $contactNo;

    }



    public function getContactNo() {

        return $this->contactNo;

    }



    public function setEmail($email) {

        $this->email = $email;

    }



    public function getEmail() {

        return $this->email;

    }



    public function setAddress($address) {

        $this->address = $address;

    }



    public function getAddress() {

        return $this->address;

    }

}



// Process form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $formInfo = new FormInfoClass();



    // Set values using form data

    $formInfo->setLastName($_POST["last_name"]);

    $formInfo->setFirstName($_POST["first_name"]);

    $formInfo->setMiddleInitial($_POST["middle_initial"]);

    $formInfo->setAge($_POST["age"]);

    $formInfo->setContactNo($_POST["contact_no"]);

    $formInfo->setEmail($_POST["email"]);

    $formInfo->setAddress($_POST["address"]);



    // Display submitted values

    echo "Last Name: " . $formInfo->getLastName() . "<br>";

    echo "First Name: " . $formInfo->getFirstName() . "<br>";

    echo "Middle Initial: " . $formInfo->getMiddleInitial() . "<br>";

    echo "Age: " . $formInfo->getAge() . "<br>";

    echo "Contact No.: " . $formInfo->getContactNo() . "<br>";

    echo "Email: " . $formInfo->getEmail() . "<br>";

    echo "Address: " . $formInfo->getAddress() . "<br>";

}



?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>



    <h2>Registration Form</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="last_name">Last Name:</label>

        <input type="text" name="last_name" required><br>



        <label for="first_name">First Name:</label>

        <input type="text" name="first_name" required><br>



        <label for="middle_initial">Middle Initial:</label>

        <input type="text" name="middle_initial"><br>



        <label for="age">Age:</label>

        <input type="number" name="age" required><br>



        <label for="contact_no">Contact No.:</label>

        <input type="tel" name="contact_no" required><br>



        <label for="email">Email:</label>

        <input type="email" name="email" required><br>



        <label for="address">Address:</label>

        <textarea name="address" rows="4" required></textarea><br>



        <input type="submit" value="Submit">

    </form>



</body>

</html>