document.addEventListener('DOMContentLoaded', () => {
    
    const loginForm = document.getElementById('login-form');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const adminPanel = document.getElementById('admin-panel');
    const menuPdfInput = document.getElementById('menu-pdf');
    const saveMenuButton = document.getElementById('save-menu');
    const menuSaveStatus = document.getElementById('menu-save-status');
    const loginError = document.getElementById('login-error');

  
    const validCredentials = {
        username: "admin",
        password: "password123"
    };

    
    const loadMenuPdf = () => {
        const pdfUrl = localStorage.getItem('menuPdfUrl') || '';
        menuPdfInput.value = pdfUrl;
    };

    /**
     * Zeigt eine Statusnachricht unter dem Eingabefeld an.
     * @param {string} message - Die anzuzeigende Nachricht
     * @param {string} color - Der Farbwert (z. B. "red" oder "green")
     */
    const showMenuSaveStatus = (message, color) => {
        menuSaveStatus.textContent = message;
        menuSaveStatus.style.color = color;
    };

   
    const saveMenuPdf = () => {
        const pdfUrl = menuPdfInput.value.trim();
        if (pdfUrl) {
            localStorage.setItem('menuPdfUrl', pdfUrl);
            showMenuSaveStatus("URL der Speisekarte wurde erfolgreich gespeichert.", "green");
        } else {
            showMenuSaveStatus("Bitte eine gültige URL eingeben.", "red");
        }
    };

    /**
     * Überprüft die eingegebenen Login-Daten und schaltet entsprechend um.
     * @param {Event} event - Das Submit-Event des Formulars
     */
    const handleLogin = (event) => {
        event.preventDefault();

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (username === validCredentials.username && password === validCredentials.password) {
            loginForm.style.display = "none";
            adminPanel.style.display = "block";
            loadMenuPdf();
        } else {
            loginError.textContent = "Ungültige Anmeldedaten.";
            loginError.style.color = "red";
        }
    };

    // Event Listener registrieren
    if (loginForm) {
        loginForm.addEventListener('submit', handleLogin);
    }

    if (saveMenuButton) {
        saveMenuButton.addEventListener('click', saveMenuPdf);
    }
});
