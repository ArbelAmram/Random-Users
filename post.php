<?php

include_once("db.php");
include_once("script.php");

// DELETE PREVIOUS USERS
    
    $delete = "DELETE FROM users";
    mysqli_query($conn, $delete);

    // POST DATA TO DB
    
    $json = json_decode($result,true);
    
    for($i = 0 ; $i < 10 ; $i++) {
        $name = $json['results'][$i]['name']['first'] ?? 'invalid info';
        $age = $json['results'][$i]['dob']['age'] ?? 'invalid info';
        $country = $json['results'][$i]['location']['country'] ?? 'invalid info';
        $email = $json['results'][$i]['email'] ?? 'invalid info';
        $profile_pic = $json['results'][$i]['picture']['large'] ?? 'invalid info';

        $sql_post = "INSERT INTO users (name, age, country, email, profile_pic) VALUES ('$name', '$age', '$country', '$email', '$profile_pic');";
        mysqli_query($conn, $sql_post);
    }