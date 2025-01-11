// auth-scripts.js

// Login form validation
document.getElementById("loginForm")?.addEventListener("submit", function (e) {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const errorDiv = document.getElementById("loginError");
  
    // Clear previous errors
    errorDiv.textContent = "";
  
    // Basic validation
    if (!email || !password) {
      errorDiv.textContent = "Veuillez remplir tous les champs.";
      e.preventDefault();
    }
  });
  
  // Register form validation
  document.getElementById("registerForm")?.addEventListener("submit", function (e) {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
    const errorDiv = document.getElementById("registerError");
  
    // Clear previous errors
    errorDiv.textContent = "";
  
    // Basic validation
    if (!name || !email || !phone || !password || !confirmPassword) {
      errorDiv.textContent = "Veuillez remplir tous les champs.";
      e.preventDefault();
      return;
    }
  
    // Password match validation
    if (password !== confirmPassword) {
      errorDiv.textContent = "Les mots de passe ne correspondent pas.";
      e.preventDefault();
      return;
    }
  
    // Password strength validation
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!passwordRegex.test(password)) {
      errorDiv.textContent = "Le mot de passe doit contenir au moins 8 caractères, dont une lettre et un chiffre.";
      e.preventDefault();
    }
  });
  