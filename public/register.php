<?php require_once('../presentation/templates/header.php'); ?>
<body class="body">
  <div class="auth-container">
    <div class="auth-card">
      <h1>Créer un compte GasaConnect</h1>
      <p>Rejoignez-nous pour profiter de forfaits internet abordables</p>
      <form id="registerForm">
        <label for="name">Nom complet</label>
        <input type="text" id="name" name="name" placeholder="Votre nom complet" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email" required>
        
        <label for="phone">Numéro de téléphone</label>
        <input type="tel" id="phone" name="phone" placeholder="Votre numéro (ex: +237...)" required>
        
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
        
        <label for="confirm-password">Confirmer le mot de passe</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmez votre mot de passe" required>
        
        <button type="submit" class="btn">S'inscrire</button>
        <p class="switch">
          Déjà inscrit ? <a href="login.php">Connectez-vous</a>
        </p>
        <div id="registerError" class="error-message"></div>
      </form>
    </div>
  </div>
</body>
</html>
