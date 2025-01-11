<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GasaConnect - Tableau de bord Admin</title>
  <link rel="stylesheet" href="../assets/css/admin-styles.css">
</head>
<body>
  <!-- Barre de navigation -->
  <header class="navbar">
    <h1>GasaConnect - Admin</h1>
    <nav>
      <ul>
        <li><a href="#dashboard" class="active">Dashboard</a></li>
        <li><a href="#users">Utilisateurs</a></li>
        <li><a href="#offers">Forfaits</a></li>
        <li><a href="#transactions">Transactions</a></li>
        <li><a href="#settings">Paramètres</a></li>
        <li><a href="logout.html" class="logout">Déconnexion</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenu principal -->
  <main>
    <!-- Tableau de bord -->
    <section id="dashboard" class="section">
      <h2>Tableau de bord</h2>
      <div class="stats">
        <div class="card">
          <h3>Étudiants inscrits</h3>
          <p>150</p>
        </div>
        <div class="card">
          <h3>Total des transactions</h3>
          <p>500,000 FCFA</p>
        </div>
        <div class="card">
          <h3>Offres actives</h3>
          <p>3</p>
        </div>
      </div>
    </section>

    <!-- Gestion des utilisateurs -->
    <section id="users" class="section">
      <h2>Utilisateurs</h2>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Forfait actif</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>+237 671234567</td>
            <td>500 Mo</td>
            <td><button class="btn btn-edit">Modifier</button> <button class="btn btn-delete">Supprimer</button></td>
          </tr>
          <!-- Ajouter d'autres utilisateurs ici -->
        </tbody>
      </table>
    </section>

    <!-- Gestion des forfaits -->
    <section id="offers" class="section">
      <h2>Forfaits</h2>
      <table>
        <thead>
          <tr>
            <th>Nom du forfait</th>
            <th>Volume</th>
            <th>Prix</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Forfait Étudiant</td>
            <td>500 Mo</td>
            <td>100 FCFA</td>
            <td><button class="btn btn-edit">Modifier</button> <button class="btn btn-delete">Supprimer</button></td>
          </tr>
          <!-- Ajouter d'autres forfaits ici -->
        </tbody>
      </table>
    </section>

    <!-- Gestion des transactions -->
    <section id="transactions" class="section">
      <h2>Transactions</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Forfait</th>
            <th>Montant</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>John Doe</td>
            <td>500 Mo</td>
            <td>100 FCFA</td>
            <td>20/12/2024</td>
          </tr>
          <!-- Ajouter d'autres transactions ici -->
        </tbody>
      </table>
    </section>

    <!-- Paramètres -->
    <section id="settings" class="section">
      <h2>Paramètres</h2>
      <form>
        <label for="threshold">Seuil de transfert à MTN :</label>
        <input type="number" id="threshold" name="threshold" value="100">
        <button type="submit" class="btn">Enregistrer</button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 GasaConnect. Tous droits réservés.</p>
  </footer>
</body>
</html>
