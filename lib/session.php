<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function secu_session_start()
{
    session_start();

    $ip = !empty($_SERVER['HTTP_X_FORWARDED']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

    $securite = $ip . '_' . $_SERVER['HTTP_USER_AGENT'];

    if(empty($_SESSION)) {

        $_SESSION['securite'] = $securite;
        return true;

    }

    elseif($_SESSION['securite'] != $securite) {

        session_regenerate_id();
        $_SESSION = array();

        return false;

    }

    return true;

}