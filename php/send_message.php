<?php

require_once"utilities.php";
require_once"dataBase.php";

$response=json_decode($_POST['response'], false);
$email=$response->email;

if(!empty($response) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    $contact=$pdo->prepare("INSERT INTO contacts( name, email, subject, message) VALUES (?,?,?,?)");
    $contact->execute([test_input($response->name),$email, test_input($response->subject), test_input($response->message)]);

    $response=json_encode("thanks for your mail, I'll respond you as soon as possible");
    echo $response;
   
}else{
    $response=json_encode("error mail");
    echo $response;
}