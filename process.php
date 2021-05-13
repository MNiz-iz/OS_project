<?php include 'server.php'; ?>

<?php
    //print_r($_POST);
    $name = $_POST['user'];
    $tel = $_POST['tel'];
    $address = $_POST['adds'];
    $zip = $_POST['zip'];

    mysqli_query($conn, "INSERT INTO adobe (name, phone, adds, zip) VALUES ('$name', '$tel', '$address', '$zip')");
?>