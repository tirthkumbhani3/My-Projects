<?php 
    include 'connect.php'; 

    // Clear the seller_id cookie
    setcookie('user_id', '', time() - 1, '/');
    
    // Redirect to logout page
    header('location: ../home.php ');
?>
