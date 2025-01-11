<?php require_once('../presentation/templates/header.php'); ?>
<body>
    <!-- En-tête -->
    <header class="navbar">
        <div class="logo">Gasa<span>Connect</span></div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html" class="active">Accueil</a></li>
                <li><a href="../presentation/forms/FormOffreInternet.php">Offres Internet</a></li>
                <li><a href="../presentation/forms/FormFAQ.php">FAQ</a></li>
                <li><a href="../presentation/forms/">À propos</a></li>
                <li><a href="../presentation/forms/FormSupportPage.php">Contact</a></li>
            </ul>
        </nav>
        <div class="btn">
            <a href="register.php" class="btn-highlight">S'Inscrir</a>
            <a href="login.php" class="btn-highlight">Se Connecter</a>
        </div>
    </header>

    <!-- Section Hero -->
    <section class="hero">
        <div class="hero-text">
            <h1>GASA FREE DATA</h1>
            <h1 class="yellow">Internet pour tous les étudiants</h1>
            <p>Grâce à GasaConnect, accédez aux meilleurs forfaits MTN à des prix réduits. <br> Connectez-vous, travaillez et réalisez vos rêves.</p>
            <a href="internet.php" class="btn-yellow">Découvrir les forfaits</a>
        </div>
        <div class="hero-image">
            <img src="../presentation/assets/images/5.jfif" alt="Illustration">
        </div>
    </section>


    <!-- Section Bénéfices -->
    <section class="benefits">
        <h2>Pourquoi choisir GasaConnect ?</h2>
        <div class="container">
            <div class="">
                <img src="../presentation/assets/images/9.png" alt="Illustration" style="width: 180px; ">
                <div class="text">
                    <h3>Des prix imbattables</h3>
                    <p>Profitez des forfaits internet les plus abordables pour vos études et vos loisirs.</p>
                </div>  
            </div>

            <div class="">
                <img src="../presentation/assets/images/12.jpg" alt="Illustration">
                <div class="text">
                    <h3>Une connexion rapide</h3>
                    <p>Des plans de qualité fournis par MTN, adaptés à vos besoins.</p>
                </div>  
            </div>

            <div class="">
                <img src="../presentation/assets/images/8.png" alt="Illustration">
                <div class="text">
                    <h3>Facile et intuitif</h3>
                    <p>Un accès simple pour gérer vos achats et votre historique en quelques clics.</p>
                </div>  
            </div>
            
        </div>
    </section>

    <!-- Section Hero2 -->
    <section class="hero2">
        <div class="container">
            <img src="../presentation/assets/images/9.png" alt="Illustration" style="width: 180px; ">
            
            <div class="text">
                <h1>Texte principal</h1>
                <p>
                    Ceci est un exemple de texte principal qui apparaît au centre.
                    Vous pouvez ajouter une description plus longue ici si nécessaire.
                </p>
            </div>
            
            <div class="side-text">
                <h3>Texte supplémentaire</h3>
                <p>
                    Détails additionnels ou autre information utile.
                </p>
            </div>
        </div>
    </section>

    <!-- Section Offres -->
    <section class="offers">
        <h2>Nos forfaits étudiants</h2>
        <div class="offer-cards">
            <div class="offer-card">
                <h3>1 Go / 7 jours</h3>
                <p>À seulement 500 FCFA</p>
                <button class="btn-secondary">Acheter</button>
            </div>
            <div class="offer-card">
                <h3>2 Go / 14 jours</h3>
                <p>À seulement 900 FCFA</p>
                <button class="btn-secondary">Acheter</button>
            </div>
            <div class="offer-card">
                <h3>5 Go / 30 jours</h3>
                <p>À seulement 2000 FCFA</p>
                <button class="btn-secondary">Acheter</button>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="contact">
        <h2>Besoin d'aide ?</h2>
        <p>Notre équipe est disponible pour répondre à vos questions 24/7.</p> <br>
        <a href="#" class="btn-primary">Nous contacter</a>
    </section>

    <!-- Pied de page -->
    <?php require_once('../presentation/templates/footer.php'); ?>
</body>
</html>
