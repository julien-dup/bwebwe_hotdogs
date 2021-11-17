<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
   
    <title>The Best Hotdogs !!!</title>
</head>

<body>
    
    <div class="header"></div>

            <?php require 'assets/php/navbar.php' ?>

            <div class="main">
                <div class="line_photo1">
                    <img class="imgBox1" src="assets/image/photos/hotdog1.jpg" alt="photo hotdog">
                    <img class="imgBox2" src="assets/image/photos/hotdog5.jpg" alt="photo hotdog">
                    <img class="imgBox3" src="assets/image/photos/hotdog3.jpg"alt="photo hotdog">
                    <img class="imgBox4" src="assets/image/photos/hotdog4.jpg" alt="photo hotdog">
                </div>
                <div class="contain">
                    <div class="description">
                        <div class="containDesc">
                        <h1>Bwai Bwai Hotdogs</h1>
                        <h2> the best hotdogs ever !!! </h2>
                        <img class="bwebwePhoto" src="assets/image/photos/hotdog2.jpg" alt="photo Vincent">
                        <p>We’ll bring our famous JOJO’S GRILL-A-DOG® hot dogs to you with our fully stocked JoJo’s Grill-A-Dog hot dog food truck in the Inland Empire. You get the best of what our brick-and-mortar store has to offer straight to your doorstep. Our food truck catering service is available to the greater Inland Empire and is perfect for:

Corporate Events
Fundraisers
Festivals and Carnivals
Parties

If you’re interested in having JoJo’s cater your event with their food trucks, please call Charity at 909-289-0574.  Whether it’s 50 people or 1000 people, we can make it happen for your event, party, festival or fundraiser!</p>
                        </div>
                    </div>
                    <div class="form">
                        <h2>Réserver votre évenement <br> hot-dogs maintenant !</h2>
                        <label for="name">Votre Nom :</label>
                        <input type="text" placeholder="dupont">
                        <label for="firstname">Votre Prénom :</label>
                        <input type="text" placeholder="jean">
                        <label for="mil">email de contact :</label>
                        <input type="mail" placeholder="jean@dupont.fr">
                        <label for="phone">Numéro de contact :</label>
                        <input type="phone" placeholder="0601020304">
                        <label for="eventDate">Date et heure de votre évenement :</label>
                        <input type="date">
                        <input type="time" min="09:00" max="18:00" required> 
                        <label for="Estimated Attendance">Nombre de personnes attendue :</label>
                        <input type="number" min="20">
                    </div>
                </div>
            </div>
</body>

</html>