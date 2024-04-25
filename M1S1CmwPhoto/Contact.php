<?php $pageTitle="Contact"?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/mbw_contact.css">
        <title>Présentation de Margaret Bourke-White</title>
    </head>
    <body>
        <?php include 'includes/header.php'?>
        <section>
            <div id="content">
                    <div id="Left">
                        <div class="Heading"><h2>Nous contacter</h2></div>
                        <div class="ContactInfo">
                            <div class="ContactInfoS">
                                <img class="email" src="https://hyunjiikim.github.io/MBW/icon/Envelope.png" alt="Envelope icon">
                                <p><a href="mailto:hyunjiikim@hyunjiikim.fr">hyunjikim@hyunjikim.fr</a></p>
                            </div>
                            <div class="ContactInfoS">
                                <img class="email" src="https://hyunjiikim.github.io/MBW/icon/Envelope.png" alt="Envelope icon">
                                <p><a href="mailto:myriamrharsalla29@gmail.fr">myriamrharsalla29@gmail.com</a></p>
                            </div>
                            <div class="ContactInfoS">
                                <img class="map" src="https://hyunjiikim.github.io/MBW/icon/Map.png" alt="Map icon">
                                <p>Bâtiment Bois de l'Étang, 9 Rue Galilée<br>77420 Champs-sur-Marne</p>
                            </div>
                        </div>
                        <div class="Map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0797438809345!2d2.5932641999999997!3d48.837617599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60fccf7155555%3A0xe0d0bc4dd0378fcf!2sMaster%20Cultures%20And%20Crafts%20Du%20Web!5e0!3m2!1sen!2sfr!4v1708368187818!5m2!1sen!2sfr" width="440" height="235" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div id="v-line"></div>
                    <div id="Right">
                        <div class="Heading"><h2>Écrivez-nous</h2></div>
                        <div class="CardS_List">
                            <textarea class="CardS" placeholder="Nom"></textarea>
                            <textarea class="CardS" placeholder="Prénom"></textarea>
                            <textarea class="CardS" placeholder="E-mail"></textarea>
                        </div>
                        <textarea class="CardL" placeholder="Écrivez-nous quelques mots..."></textarea>
                        <input type="submit" value="Envoyer">
                    </div>
            </div>
        </section>
        <?php include 'includes/footer.php'?>
    </body>
</html>