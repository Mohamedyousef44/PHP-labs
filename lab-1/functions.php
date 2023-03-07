<?php



function validate_form(){ 

    $name = isset($_POST['name']) ? $_POST['name'] : "" ;
    $email = isset($_POST['email']) ? $_POST['email'] : "" ;
    $msg = isset($_POST['message']) ? $_POST['message'] : "" ;
       
    if($name == "" || $email == "" || $msg == "" ){

        return "Field is empty";

    }elseif(strlen($name) > __MAX_NAME_LEN__){

        return "name must be less than 100 character";
    }

    elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){

        return "please enter valid email";
    }

    elseif(strlen($msg) > __MAX_MSG_LEN__){

        return "message must be less than 255 character";

    }else{

        return "";

    }
   
};

function remeber_var($var){

    if(isset($_POST[$var]) && !empty($_POST[$var])){

        return $_POST[$var];

    }
}


?>