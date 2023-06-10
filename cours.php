<?php
    $courses = [
        [
            'image' => 'images/git-and-github.png',
            'title' => 'Git et Github',
            'time' => 5,
        ],

        [
            'image' => 'images/html5.jpg',
            'title' => 'HTML5',
            'time' => 5,
        ],

        [
            'image' => 'images/css3.png',
            'title' => 'CSS3',
            'time' => 5,
        ],

        [
            'image' => 'images/flex.png',
            'title' => 'Flexbox',
            'time' => 5,
        ],

        [
            'image' => 'images/responsive.png',
            'title' => 'Responsive',
            'time' => 5,
        ],

        [
            'image' => 'images/annimation.jpg',
            'title' => 'Animation',
            'time' => 5,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f16fe10581.js" crossorigin="anonymous"></script>
    <title>Cours</title>
</head>
<body>
    
       <!--header-->
       <?php include('includes/header.php'); ?>

    <div class="container">
        <h2 class="flex-title">Les cours</h2>

        <div class="flex-box">
            <?php foreach($courses as $course): ?>
                    <div class="flex-items">
                        <img src="<?php echo $course['image'] ?>">
                        <h3><?php echo $course['title'] ?></h3>
                        <small><?php echo $course['time'] . ' heures' ?></small>
                    </div>      
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section news-letter">
        <div class="container">
            <div class="subscribe1">
                <h2>Abonnez vous à la boite<br> aux lettres</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Corporis harum labore ea temporibus, modi voluptatibus 
                     doloribus qui odit assumenda. Officiis, architecto! Vitae 
                     dignissimos dicta magni, at quas amet itaque quos!
                </p>
            </div>
            <div class="subscribe2">
                <form action="#">
                    <input type="email" placeholder="Adresse email..">
                    <input type="submit" value="S'abonner">
                </form>
            </div>
        </div>
    </div>

    <!--Footer -->
    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>

    <script src="js/script.js"></script>   
</body>
</html>