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


function write_log_file($fileName , $arrOfstr){

    $logStr = ['visit date :' , 'IP address :' , 'Email :' , 'Name :'];

    if(!empty($_POST)){

        $file = fopen($fileName, "a+");
        $line = str_repeat("_", 50) ;

        for ($x = 0; $x < count($logStr); $x++) {
            fwrite($file, "$logStr[$x] $arrOfstr[$x]\r\n");
          }

        fwrite($file, "$line\r\n");

        fclose($file);
    }
};

function read_log_file(){

    $file = fopen(__FILE_NAME__, "r+");
    $arrOflines = [];

    while(! feof($file)){
        $line = fgets($file);
        array_push($arrOflines,"$line");
    }
    fclose($file);
    return $arrOflines; 
}

?>