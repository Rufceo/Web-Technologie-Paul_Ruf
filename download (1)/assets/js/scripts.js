

// Sprachwechsel-Funktion
function switchLanguage() {
    var language = document.getElementById('language-switcher').value;

    // Überprüfen der Seiten-Elemente und Sprache umschalten
    if (language === 'en') {
        // Englisch Übersetzungen
        var elements = document.querySelectorAll('[data-translate-en]');
        elements.forEach(function(el) {
            el.innerText = el.getAttribute('data-translate-en');
        });
    } else {
        // Deutsch Übersetzungen
        var elements = document.querySelectorAll('[data-translate-de]');
        elements.forEach(function(el) {
            el.innerText = el.getAttribute('data-translate-de');
        });
    }
}

// Hamburger Menü Toggle
const menuToggle = document.getElementById('menu-toggle');
const navList = document.querySelector('#nav-bar .nav-list');

if (menuToggle && navList) {
    menuToggle.addEventListener('click', () => {
        navList.classList.toggle('active');
    });
}

// Für den Footer-Menü
const menuToggleFooter = document.getElementById('menu-toggle-footer');
const navListFooter = document.querySelector('#nav-bar2 .nav-list');

if (menuToggleFooter && navListFooter) {
    menuToggleFooter.addEventListener('click', () => {
        navListFooter.classList.toggle('active');
    });
}

