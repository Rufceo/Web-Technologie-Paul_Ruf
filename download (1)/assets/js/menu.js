document.addEventListener('DOMContentLoaded', () => {
    const pdfContainer = document.getElementById('menu-pdf-container');

   
    if (!pdfContainer) {
        console.warn('Kein Container für die Speisekarte gefunden.');
        return;
    }

  
    const pdfUrl = localStorage.getItem('menuPdfUrl') || 'uploads/speisekarte.pdf';

    const pdfHtml = `
        <embed src="${pdfUrl}" width="100%" height="500px" type="application/pdf" />
        <p><a href="${pdfUrl}" download>Speisekarte herunterladen</a></p>
    `;

    pdfContainer.innerHTML = pdfHtml;
});
