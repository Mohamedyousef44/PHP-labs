<?php

require_once('./config.php');
require_once('./functions.php');


// form validation 

$error = "";
if(!empty($_POST)){

    $error = validate_form();

    if($error == ""){

        $name = trim(strtolower($_POST['name']));
        $email = trim($_POST['email']);
        $msg =  trim(strtolower($_POST['message']));

        die("<center><h3>".__THANKS__."</h3></center>".
            "<p> Your Data : </p>".
            "<p> Name : " .$name. "</p>".
            "<p> Email : " .$email. "</p>".
            "<p> Message : " .$msg. "</p>"
        );

    }
}


// front controller
$parameter = isset($_GET['page']) ? $_GET['page'] : 'contact';

if($parameter == 'contact') require_once('./views/contact.php');
    
else require_once('./views/form.php');

?>