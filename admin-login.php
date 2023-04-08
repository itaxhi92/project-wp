<?php
    $servername = 'localhost'; 
    $username = 'root'; 
    $password = ''; 
    $dbname = 'ecom';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    $admin_id = $_POST['admin_id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usertable WHERE admin_id = '$admin_id' AND pass_word='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header('<script>alert("Login Sucessful");</script>');
    } else {
        echo '<script>alert("Wrong Details");</script>';
    }
    $conn->close();
?>