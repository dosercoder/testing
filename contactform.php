<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];

    $mailTo = "jaenellesimon@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;


    mail($mailTo, $type, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>