<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailForm = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $mailTo = "facuchaves957@gmail.com";
        $headers = "from: ".$mailFrom;
        $txt = "You have a message ".$name".\n\n".$message;

        mail($mailTo, $name, $txt, $headers);

        header("Location: index.html?MessageSent")
    }
?>