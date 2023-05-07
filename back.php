<?php
    // retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phonenum'];
    $gender = $_POST['gender'];
    $language = $_POST['lang'];
    $zip = $_POST['zipcode'];
    $about = $_POST['about'];

    // connect to database
    $conn = new mysqli("localhost", "root", "", "formbackend");
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into datainput(Full_Name, Email, Passkey, Phone_Number, Gender, Lang, Zipcode, About)
            values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssissis", $name, $email, $pass, $phone, $gender, $language, $zip, $about);
        $stmt->execute();
        header("location: success.php");
        $stmt->close();
        $conn->close();
    }
?>