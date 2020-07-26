    // fetch('http://api.airvisual.com/v2/nearest_city?key=a66bcd5d-667c-423e-9d14-612e478bcd80')
    // .then(response => response.json())
    // .then(info => {
    //   console.log(info);
    //   console.log("ville: "+info.data.city);
    //   console.log("pr:" +info.data.current.weather.pr );
    // })
    // .catch((error) => {
    //   console.error('Error:', error);
    // });

    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
      };
      
      fetch("http://api.airvisual.com/v2/city_ranking?key=a66bcd5d-667c-423e-9d14-612e478bcd80", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));


    
    // On initialise la latitude et la longitude de Paris (centre de la carte)
    var lat = 48.852969;
    var lon = 2.349903;
    var macarte = null;

    var markerClusters; // Servira à stocker les groupes de marqueurs
    // Nous initialisons une liste de marqueurs
      var villes = {
          "Goussainville": {"lat": 49.030467, "lon": 2.471236},
          "Marseille": {"lat": 43.296482, "lon": 5.369780},
          "Lyon": {"lat": 45.764043, "lon":4.835659},
          "Grenoble": {"lat": 45.188529, "lon": 5.724524},
          "New York": {"lat": 40.712784, "lon": -74.005941},
          "Los Angeles": {"lat": 34.052234, "lon": -118.243685},
          "Berlin": {"lat": 52.520007, "lon": 13.404954},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
        //   "": {"lat": , "lon":},
          "Paris": { "lat": 48.852969, "lon": 2.349903 },
          "Brest": { "lat": 48.383, "lon": -4.500 },
          "Quimper": { "lat": 48.000, "lon": -4.100 },
          "Bayonne": { "lat": 43.500, "lon": -1.467 }
          
      };

    function initMap() {
    
    var iconBase = './src/public/icons/m3.png';
    macarte = L.map('airMap').setView([lat, lon], 2);
    markerClusters = L.markerClusterGroup();

    var mainLayer =  L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}.png', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
        minZoom: 2,
        maxZoom: 15
    }).addTo(macarte);

    var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {           
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
     minZoom: 2,
     maxZoom: 15
    })

    L.control.layers({
     'Esri': mainLayer,
     'OpenStreet': OpenStreetMap_Mapnik,          
    },{
     // TODO
    }).addTo(macarte)

    L.Control.Watermark = L.Control.extend({
        onAdd: function() {
            var img = L.DomUtil.create('img');

        img.src = './src/public/images/logo.png';
        img.style.width = '75px';

        return img;
    },

    onRemove: function() {
        // Nothing to do here
    }
});

L.control.watermark = function(opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(macarte);

 
    // Nous parcourons la liste des villes
    for (ville in villes) {
        var myIcon = L.icon({
            iconUrl: iconBase,
            iconSize: [50, 50],
            iconAnchor: [25, 50],
            popupAnchor: [-3, -76],
        });
        var marker = L.marker([villes[ville].lat, villes[ville].lon], { icon: myIcon }); // pas de addTo(macarte), l'affichage sera géré par la bibliothèque des clusters
        marker.bindPopup(ville);
        markerClusters.addLayer(marker); // Nous ajoutons le marqueur aux groupes
    }
    macarte.addLayer(markerClusters);
}

window.onload = function(){
initMap(); 
}; 