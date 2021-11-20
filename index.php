<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Praise&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Outfit:wght@100;300&family=Praise&display=swap" rel="stylesheet"> 
    <title>The Best Hotdogs !!!</title>
</head>

<body>

    <div class="header"></div>

    <?php require 'assets/php/navbar.php' ?>

    <div class="main">
        <div class="line_photo1">
            <img class="imgBox1" src="assets/image/photos/bwehotdog3.jpg" alt="photo hotdog1">
            <img class="imgBox2" src="assets/image/photos/bwehotdog2.jpg" alt="photo hotdog2">
            <img class="imgBox3" src="assets/image/photos/bwehotdog4.jpg" alt="photo hotdog3">
            <img class="imgBox4" src="assets/image/photos/bwehotdog5.jpg" alt="photo hotdog4">
            <img class="imgBox5" src="assets/image/photos/bwehotdog1.jpg" alt="photo hotdog4">
        </div>
        <div class="contain">
            <div class="description">
                <div class="containDesc">
                    <h1><span>C </span>hez <span> V </span> inc</h1>
                    <h2> the best hotdogs ever !!! </h2>
                    <img class="bwebwePhoto" src="assets/image/photos/hotdog2.jpg" alt="photo Vincent">
                    <p class="text">Nous vous apporterons notre célèbre stand de Hot-dogs Chez Vinc®. <br>Avec notre camion de Hot-dogs Chez Vinc, vous obtenez le meilleur du hot-dogs aux saveurs riches et surprenantes.<br> <br>Notre service de restauration de camions de nourriture est disponible pour le Havre et son agglomération et est parfait pour:


                        Événements d’entreprise
                        Collectes de fonds
                        Festivals et carnavals
                        Anniversaire
                        Mariage

                        <br><br> Si vous souhaitez que Vin'z organise votre événement avec nos délicieux hot-dogs, veuillez appeler Vincent au 909-289-0574. Qu’il s’agisse de 50 personnes ou de 1000 personnes, nous pouvons le faire pour votre événement, fête, festival ou collecte de fonds!
                    </p>
                </div>
            </div>
            <div class="form">
                <h2>Réserver votre évènement </h2>
                <h2>hot-dogs dès maintenant !</h2>
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
                <input type="number" min="20" placeholder="50" style='width:40px'>
                <label for="adress">Adresse de l'évènement :</label>
                <input type="text" placeholder="5 rue jean rousseaux 76000 Le Havre" style='width:300px'>
                <label for="info">Donnez-nous des informations sur votre évènement :</label>
                <textarea id="story" name="story" rows="5" cols="33" >
Bonjour, je souhaiterai connaître vos disponibilité pour un mariage le 05/06/2022 ?
                </textarea>
                <button type="submit">Valider</button>
                    </div>
                </div>
            </div>
</body>

</html>