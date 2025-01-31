<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace - HikeTime</title>
    <link rel="stylesheet" href="./CSS/espaceadmin.css">
    <link rel="shortcut icon" href="./img/hiking.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
</head>
<body>
    <div class="conteneur">
        <header>
            <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(47, 56, 2, 1)" offset="0%"></stop><stop stop-color="rgba(108.161, 122.543, 36.247, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,39L48,52C96,65,192,91,288,88.8C384,87,480,56,576,43.3C672,30,768,35,864,39C960,43,1056,48,1152,56.3C1248,65,1344,78,1440,84.5C1536,91,1632,91,1728,93.2C1824,95,1920,100,2016,88.8C2112,78,2208,52,2304,43.3C2400,35,2496,43,2592,45.5C2688,48,2784,43,2880,41.2C2976,39,3072,39,3168,49.8C3264,61,3360,82,3456,75.8C3552,69,3648,35,3744,19.5C3840,4,3936,9,4032,21.7C4128,35,4224,56,4320,71.5C4416,87,4512,95,4608,99.7C4704,104,4800,104,4896,93.2C4992,82,5088,61,5184,60.7C5280,61,5376,82,5472,88.8C5568,95,5664,87,5760,86.7C5856,87,5952,95,6048,84.5C6144,74,6240,43,6336,28.2C6432,13,6528,13,6624,30.3C6720,48,6816,82,6864,99.7L6912,117L6912,130L6864,130C6816,130,6720,130,6624,130C6528,130,6432,130,6336,130C6240,130,6144,130,6048,130C5952,130,5856,130,5760,130C5664,130,5568,130,5472,130C5376,130,5280,130,5184,130C5088,130,4992,130,4896,130C4800,130,4704,130,4608,130C4512,130,4416,130,4320,130C4224,130,4128,130,4032,130C3936,130,3840,130,3744,130C3648,130,3552,130,3456,130C3360,130,3264,130,3168,130C3072,130,2976,130,2880,130C2784,130,2688,130,2592,130C2496,130,2400,130,2304,130C2208,130,2112,130,2016,130C1920,130,1824,130,1728,130C1632,130,1536,130,1440,130C1344,130,1248,130,1152,130C1056,130,960,130,864,130C768,130,672,130,576,130C480,130,384,130,288,130C192,130,96,130,48,130L0,130Z"></path></svg>
            <div id="logo"><img src="./img/hiking (2).svg"id="icon-image">
                <p id="logo-text">HikeTime</p>
            </div>
            <div id="search-bar">
                <input type="text" placeholder="Rechercher Randonée...">
                <button type="submit"><img src="./img/search (3).svg" id="search-image"></button>
            </div>
    
            <div class="buttons">
                <div id="ajouter">
                    <button><a href="./hikeform.php"><img src="./img/add-circle-svgrepo-com (3).svg" alt="ajouter" id="ajout-image"></a></button>
                </div>
                <div id="profil">
                    <button class="boutton_liste" ><img src="./img/profile-user.svg" alt="profil" id="profil-image">
                        <div class="dropdown">
                            <a href="#">Deconnexion</a>
                        </div>
                    </button>
                </div>  
            </div>
        </header>
        <main class="main">
            <h1 id="h1">Mon Espace</h1>
            <button class="ajout"><a href="./hikeform.php">Ajouter une randonnée</a></button>
            <h1 id="h">Les randonnées de la semaine :</h1>
            <div class="hikes">
                <div class="hike1">
                    <h2>AZRU N’THOR - TIZI-OUZOU</h2>
                    <span> </span>
                    <div class="actions">
                        <button id="bp">Voir la liste des participants</button>
                        <div id="sm">
                            <button id="delete" onclick="openDeletePopup()"><img src="./img/delete_white_24dp.svg" alt="supprimer"></button>
                            <button id="edit" onclick="openPopup()"><img src="./img/edit_white_24dp.svg" alt="modifier"></button>
                        </div>
                    </div>
                </div>
                <div class="hike2">
                    <h2>THALA GUILEF - TIZI-OUZOU</h2>
                    <span> </span>
                    <div class="actions">
                        <button id="bp">Voir la liste des participants</button>
                        <div id="sm">
                            <button id="delete" onclick="openDeletePopup()"><img src="./img/delete_white_24dp.svg" alt="supprimer"></button>
                            <button id="edit" onclick="openPopup()"><img src="./img/edit_white_24dp.svg" alt="modifier"></button>
                        </div>
                    </div>
                </div>

            </div>
            <h1 id="h">Liste des randonnées précédentes :</h1>
            <div class="oldhikes">
                <div class="list">
                    <a href="#">- Sommet AKUKER - BOUIRA</a>
                    <a href="#">- LAC NOIR - BEJAIA</a>
                    <a href="#">- Mont ZACCAR - AIN-DEFLA</a>
                    <a href="#">- Cascades ZONDAY - MEDÉA</a>
                    <a href="#">- Sommet LALA KHEDIDJA - TIZI-OUZOU</a>
                    <a href="#">- Télésiège de Tikejda - TIZI-OUZOU</a>
                </div>
                <a href="#" id="more">Voir les plus anciennes ...</a>
            </div>
            <!-- boite de dialogue du message de suppression-->
            <div id="supprimer" class="supprimer">
                <div class="supprimer-content">
                    <h2 id="h2">Êtes-vous sur de vouloir supprimer cette randonnée ?</h2>
                    <div class="confirmation">
                        <button id="ok" onclick="deleteItem()">Confirmer</button>
                        <button id="annuler" onclick="closeDeletePopup()">Annuler</button>
                    </div>
                </div>
            </div>
            <!-- boite de dialogue de la confirmation de la suppression-->
            <div id="supprimerok" class="supprimerok">
                <div class="supprimerok-content">
                    <img id="logo" src="./img/confirm-icon.svg" alt="confirmation icon">
                    <h2 id="h2">La randonnée a été supprimer avec succès !</h2>
                    <button id="ok" onclick="deleteItemOk()">Ok</button>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="description">
                <h1><img src="./img/hiking (2).svg" id="footer-img"> <span>HikeTime</span></h1>
                <p>mahi needs to 3eber jpp</p>
            </div>
            <ul class="pages">
                <li>
                    <h2>Pages</h2>
                    <ul>
                        <li><a href="">Ajouter une randonnée</a></li>
                        <li><a href="">Mon espace</a></li>
                        <li><a href="">Acceuil</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="contact">
                 <li>
                    <h2>Contactez-nous</h2>
                    <ul>
                        <li><img src="images/phone-svgrepo-com (1).svg" alt=""></i> num de tel</li>
                        <li><img src="images/email-svgrepo-com.svg" alt=""> adresse mail</li>
                        <li><div class="icons">
                            <a href=""><img src="images/facebook-svgrepo-com.svg" alt=""></a>
                            <a href="#"><img src="images/instagram-svgrepo-com.svg" alt=""></a>
                            <a href="#"><img src="images/whatsapp-svgrepo-com.svg" alt=""></a>
                        </div></li>
                </li>
            </ul>
        </footer>   
    </div>
    <script src="script.js"></script>
</body>
</html>