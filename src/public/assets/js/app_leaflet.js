var map = L.map('map').setView ([49.0167, 2.4667], 11);


L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
}).addTo(map);

var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: './src/public/icons/leaf-shadow.png',
        iconSize:     [40, 50],
        shadowSize:   [50, 64],
        iconAnchor:   [20, 90],
        shadowAnchor: [20, 70],
        popupAnchor:  [-1, -90]
    }
});

var planeIcon = new LeafIcon({iconUrl: './src/public/icons/airport.png'}),
    locationIcon = new LeafIcon({iconUrl: './src/public/icons/location.png'});

var city = new L.LayerGroup();

    L.marker([49.0167, 2.4667], {icon: locationIcon}).addTo(map).bindPopup("<p><strong>Goussainville</strong><br>95190 Val d'oise</p>");
    L.marker([49.009691, 2.547925], {icon: planeIcon}).addTo(map).bindPopup("<p><strong>Roissy CDG</strong><br>9700 Val d'oise</p>");
