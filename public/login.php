<?php require_once('../presentation/templates/header.php'); ?>
<body class="body">
  <div class="auth-container">
    <div class="auth-card">
      <h1>Bienvenue sur GasaConnect</h1>
      <p>Connectez-vous pour accéder à votre compte</p>
      <form id="loginForm">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email" required>
        
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
        
        <button type="submit" class="btn">Se connecter</button>
        <p class="switch">
          Pas encore inscrit ? <a href="register.php">Créer un compte</a>
        </p>
        <div id="loginError" class="error-message"></div>
      </form>
    </div>
  </div>
</body>
</html>
