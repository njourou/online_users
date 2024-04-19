<?php

session_start();


if(isset($_SESSION['user_id'])) {

    echo "Welcome back!";
} else {

    $_SESSION['user_id'] = uniqid();
    echo "Welcome! You are a new visitor.";
}


$online_users = count(glob(session_save_path() . '/sess_*'));

echo "Number of people currently using the website: " . $online_users;
?>
