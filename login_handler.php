<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/17/19
 * Time: 11:55 AM
 */
//grab data from the register.php and login.php. validate the data and  display it in the index page,
// in form of a table

$email=$GLOBALS['email'];
$password=$GLOBALS['password'];


if(empty($email)){
    $emailErr = "Email cannot be empty";

}else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr="Invalid email format";
    }else
        echo"Email is invalid";
    else{
        echo "email";
    }



if(empty($password)){
    $passwordErr="Password cannot be empty";
    else{
        echo $password;
    }
}
?>