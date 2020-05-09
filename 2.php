<?php

function usernameValidity($username)
{
    $preg_match = "/^[a-z]{1}+[a-z._0-9]{7,11}$/";
    if (preg_match($preg_match, $username)) {
        return true;
    } else {
        return false;
    }
}

var_dump(usernameValidity("john.smith"));   #true
var_dump(usernameValidity("johnsmith26"));  #true
var_dump(usernameValidity("JOHNSmith"));    #false

function passwordValidity($password)
{
    $preg_match = "/^(?=.*[0-9])(?=.*[!”#\$%&’()*+,-.\/:;<=>?@\[\]\^_\`{|}~\\\])[a-zA-Z0-9!”#\$%&’()*+,-.\/:;<=>?@\[\]\^_\`{|}~\\\]{9}$/";
    if (preg_match($preg_match, $password)) {
        return true;
    } else {
        return false;
    }
}

var_dump(passwordValidity("j0hnam!th"));   #true
