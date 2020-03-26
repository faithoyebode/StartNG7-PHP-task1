<?php
    if(filter_has_var(INPUT_POST, 'send')){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $subject = $_POST['subject']; 
        $message = $_POST['msg'];
        $filename = $name . ".txt";
        $filecreated = fopen($filename, 'a');
        fwrite($filecreated, "Name: " . $name);
        fwrite($filecreated, "\n" . "Email: " . $email);
        fwrite($filecreated, "\n" . "Subject: " . $subject);
        fwrite($filecreated, "\n" . "Message: " . $message);
        fclose($filecreated);
    }
?>