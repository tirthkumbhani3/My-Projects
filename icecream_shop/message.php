<?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
        header('location:login.php');
    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Sumer - user order page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!--font awesome cdn link--> <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <!--- box icon -->
    <link rel="stylesheet"href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" >
</head>
<body>

                <?php include 'components/user_header.php'; ?>
                <div class="banner">
                    <div class="detail">
                        <h1>my message</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>my message</span>
                    </div>
                </div>
                <div class="orders">
            <div class="heading">
                <h1>my message</h1>
                <img src="image/separator-img.png">
            </div>
            <div class="box-container">
                <?php 
                    $select_message = $conn->prepare("SELECT * FROM `message`");
                    $select_message->execute();
                    if($select_message->rowCount() > 0){
                        while($fetch_message = $select_message->fetch(PDO::FETCH_ASSOC)){
                        
                        ?>
                        <div class="box">
                                <h3 class="name"><?= $fetch_message['name']; ?></h3>
                                <h4><?= $fetch_message['subject']; ?></h4>
                                <p><?= $fetch_message['message']; ?></p>                    
                        </div>
                        <?php
                        }
                    }else {
                            echo '
                            <div class="empty">
                            <p>No unread message yet!<br>
                            </div>';
                        }
                    
                ?>
            </div>
    

    <?php include 'components/footer.php'; ?>
    <!--sweetaler cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom js link -->
     <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html> 