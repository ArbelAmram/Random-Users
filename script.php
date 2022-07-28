<?php
    
    // CURL
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/?results=10");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    
    $result = curl_exec($ch); 
    
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    }
    curl_close($ch); 
    
    if (isset($error_msg)) {
        echo($error_msg);
    }

    // SEND INFO TO DB
    include_once("post.php");
    
                        
    
