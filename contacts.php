<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/f16fe10581.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Contacts</title>
</head>
<body>
       <!--header-->
       <?php include('includes/header.php'); ?>

    <div class="section">
        <div class="container">
            <h2>Nous contacter</h2>
            <p class="marg-b-50">Remplissez ce formulaire pour nous laisser un message</p>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <form action="#">
                <div class="form-items">
                     <div class="col-form">
                        <label for="fname">Nom</label>
                        <input type="text" id="fname" name="fname">
                    </div>
                    
                    <div class="col-form">
                        <label for="country">Pays</label>
                        <select name="country" id="country" placeholder="Choisir">
                        <option value="choose">Choisir..</option>
                            <option value="cmr">Cameroon</option>
                            <option value="cgor">Congo</option>
                            <option value="tcd">Tchad</option>
                            <option value="civ">Cote d'voire</option>
                            <option value="mli">Mali</option>
                            <option value="egt">Egypte</option>
                            <option value="gb">Gabon</option>
                            <option value="bn">Benin</option>
                        </select>
                    </div>
    
                    <div class="col-form">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="col-form">
                        <label for="goal">Objectif</label>
                        <input type="text" id="goal" name="goal">
                    </div>
                    
                    <div class="col-form marg-b-30">
                        <label for="msg">Message</label>
                        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                        <input type="submit" value="Envoyer le message">   
                    </div>
                </div>   
            </form>
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