document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('events-container');
    const searchInput = document.getElementById('search-events');

    // Funktion zum Laden der Events aus der JSON-Datei
    const loadEvents = () => {
        fetch('data/events.json')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Netzwerkfehler beim Laden der Events.');
                }
                return response.json();
            })
            .then(events => {
                displayEvents(events);
                setupSearch(events);
            })
            .catch(error => {
                container.innerHTML = `<p>${error.message}</p>`;
            });
    };

    // Funktion zum Anzeigen der Events
    const displayEvents = (events, query = '') => {
        container.innerHTML = '';
        events
            .filter(event => event.title.toLowerCase().includes(query.toLowerCase()))
            .forEach(event => {
                const div = document.createElement('div');
                div.classList.add('event');
                div.innerHTML = `
                    <h3>${event.title}</h3>
                    <p>${event.description}</p>
                    <a href="${event.link}" target="_blank">Mehr erfahren</a>
                `;
                container.appendChild(div);
            });

        if (!container.innerHTML) {
            container.innerHTML = '<p>Keine passenden Events gefunden.</p>';
        }
    };

    // Funktion für die Suchlogik
    const setupSearch = (events) => {
        searchInput.addEventListener('input', () => {
            const query = searchInput.value;
            displayEvents(events, query);
        });
    };

    // Events laden
    loadEvents();
});

