<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/channels4_profile.jpg">
        <script src="https://kit.fontawesome.com/df0c92c59c.js" crossorigin="anonymous"></script>
        

        <title>LesDossiersGeeks</title>
        
        <link rel="stylesheet" href="./avis.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <nav class="navbar">
            <ul class="nav-ul">
                <li class="nav-item"><a href="./index.html">Acceuil</a></li>
                <li class="nav-item"><a href="./page/participant.html">Remerciements</a></li>
                <li class="nav-item"><a href="./page/MAJ.html">Logs</a></li>
                <li class="nav-item-actu">
                Actualités
                <ul class="sub-menu">
                    <li><a href="./page/actualite_insta.html">Instagram </a></li>
                    <li><a href="./page/actualite_ytb.html">Youtube </a></li>
                </ul>
                </li>
                <li class="nav-item-forum">
                Forum
                <ul class="sub-menu">
                    <li><a href="https://discord.gg/BDwvKUtJrY">DC </a></li>
                    <li><a href="https://discord.gg/kDMZBm6kp2">Marvel </a></li>
                </ul>
                </li>
                <li class="nav-item"><a href="avis.html">Votre avis compte !</a></li>
            </ul>
        </nav>
        <header class="hero-section" >
            <div>
                <h1 class="hero-title">
                    Bonjour <?php echo $_POST['nom'] ?>,
                </h1>
            
                <p class="hero-description">
                Merci d'avoir envoyé votre 
                <?php 
                if ($_POST['raison'] == "upgrade") {
                    echo 'suggestion d\'amélioration du site :';
                }
                if ($_POST['raison'] == "commente") {
                    echo 'commentaire :';
                }
                if ($_POST['raison'] == "perso") {
                    echo 'message personnel :';
                }
                ?>
                <p>
                    <i>
                    <?php
                        if($_POST['comments'] == " ") {
                            echo 'Pas de messages fourni';
                        }
                    ?>
                    </i>
                    <?php
                        if($_POST['comments']){
                            echo $_POST['comments'];
                        }
                    ?>
                </p>

                </p>
                
            </div>
        </header>
        <footer class="s-m-section">
            <h1 class="s-m-title">
                C'est le moment de rejoindre Steven
            </h1>
            <p class="s-m-descritpion">
                Pour en découvrir toujours plus !
            </p>
            <a href="https://discord.gg/2xQRwEdRKP">
            <button class="s-m-btn">
                DISCORD
            </button>
            </a>
            
            <a href="./page/réseaux.html">
            <button class="s-m-btn-2">
                SES RESEAUX
            </button>
            </a>
            
            <br><br>
            <a href="https://discord.gg/2xQRwEdRKP" class="s-m-link-discord"><i class="fab fa-discord" style="font-size:28px"></i></a>
            <a href="https://www.youtube.com/c/LESDOSSIERSGEEK/community" class="s-m-link-youtube"><i class="fa fa-youtube-square fa-2x"></i></a>
            <a href="https://www.instagram.com/lesdossiersgeek/" class="s-m-link-ig"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            <a href="https://www.tiktok.com/@lesdossiersgeek1" class="s-m-link-tiktok"><i class="fab fa-tiktok" style="font-size:28px"></i></a>
        </footer>
        <br> <br>
        Made by Sam Depardieu Grp 4
    </body>

</html>