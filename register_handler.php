<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/17/19
 * Time: 11:55 AM

 */
$firstname=$password=$email=$password='';



if(empty($name)){
    $nameError = "Field is empty";
    echo $nameError;
}else{
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }else {
        echo"your name is $name";
    }
}








if(empty($email)){
    $emailErr = "Email cannot be empty";

}else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr="Invalid email format";
    }else
        echo "Email is invalid";

else
        echo "email";

}




if(empty($password)) {
    $passwordErr = "Password cannot be empty";
else{
        echo "password";
    }
}
?>