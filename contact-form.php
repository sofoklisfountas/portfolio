<?php


// if(filter_has_var(INPUT_POST, 'submit')){
//     // get form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     //Check Required Fields
//     if(!empty($email) && !empty($name) && !empty($message)){
//         //Passed
//         echo 'PASSED';
//     }else{
//         //Failed
//         $errorMsg = 'Please fill in all the fields';
//         $errorMsgClass = 'Error';

//     }
// }

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "v3nomlink@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    if (mail($mailTo, $txt, $headers)){
        $sent = true;
    }
    header("Location: index.html");
}

?>