<?php

require 'connection.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review = $conn->real_escape_string($_POST['review']);

    if(empty($review)) {
        $_SESSION['error'] = 'Review field is required';
        header('Location: review.php');
        exit;
    }

    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO reviews (user_id, review) VALUES ($user_id, '$review')";
    $conn->query($query);

    header('Location: index.php#reviews');
}
?>