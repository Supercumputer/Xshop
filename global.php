<?php
    session_start();
    $SL_PER_PAGE = 10;
    $ROOT_URL = "/xshop";
    $CONTENT = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL  = "$ROOT_URL/site";
    $UPLOAD_URL = "../../upload/";

    function exist_param($filedname){
        return array_key_exists($filedname, $_REQUEST);
    }

    function save_file($filedname, $target_dir){
        $file_uploaded = $_FILES[$filedname];
        $file_name = basename($file_uploaded['name']);
        $target_part = $target_dir . $file_name;
        move_uploaded_file($file_uploaded['tmp_name'], $target_part);
        return $file_name;
    }

    function set_cookie($name, $value, $day){
        return setcookie($name, $value, time() + (86400 * $day), '/');
    }
    
    function get_cookie($name){
        return $_COOKIE[$name] ?? "";
    }

    function delete_cookie($name){
        return set_cookie($name, "", -1);
    }
    
?>