if(document.querySelector('#mapa')) {
    var map = L.map('mapa').setView([18.4833046,-69.9411771], 15);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([18.4833046,-69.9411771]).addTo(map)
    .bindPopup('Cerca de Agora Mall')
    .openPopup();
}