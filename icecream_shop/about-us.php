<?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Sumer - about us page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!--font awesome cdn link--> <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <!--- box icon -->
    <link rel="stylesheet"href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" >

</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>
    </div>
    <!-- <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>Alex Doe</span>
                    <h1>Masterchef</h1>
                    <img src="image/separator-img.png">
                </div>
                <p>Maria is a Roman-born pastry chef who spent 15 years in his city Rome perfecting his craft and exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit hendrerit convallis.</p>
                <div class="flex-btn">
                    <a href="" class="btn">explore our menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="box">
                <img src="image/ceaf.png" class="img">
            </div>
        </div>
    </div> -->
    <!--- slider section start -->
    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <h1>our mission</h1>
                    <img src="image/separator-img.png">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission.webp">
                    </div>
                    <div>
                        <h2>Mexican Chocolate</h2>
                        <p>Mexican hot chocolate, or chocolate caliente, offers health benefits due to its ingredients, including antioxidants from dark chocolate and spices like cinnamon, which can improve cardiovascular health, boost mood, and reduce inflammation.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission1.webp">
                    </div>
                    <div>
                        <h2>Vanilla with Honey</h2>
                        <p>Vanilla-infused honey, a natural sweetener, offers potential benefits like boosting immunity, acting as an antioxidant, and potentially aiding in weight management, digestion, and calming nerves.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission0.jpg">
                    </div>
                    <div>
                        <h2>Peppermint Chip</h2>
                        <p>Peppermint, often found in chips or tea, offers potential benefits like aiding digestion, relieving headaches, and boosting alertness, thanks to its calming and numbing effects.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission2.webp">
                    </div>
                    <div>
                        <h2>Raspberry Sorbet</h2>
                        <p>Raspberry sorbet, made with natural fruit and water, offers a refreshing and light dessert with potential health benefits, including antioxidants and vitamins, while being lower in calories and fat compared to ice cream.</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="image/form.png" alt="" class="img">
            </div>
        </div>
    </div>
    <!--- mission section start -->

    <?php include 'components/footer.php'; ?>
    <!--sweetaler cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom js link -->
     <script src="js/user_script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>