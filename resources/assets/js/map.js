mapboxgl.accessToken = 'pk.eyJ1IjoiZXRpZW5kbyIsImEiOiJjamNhbTY4NDgwOXoxMnptdXIyb2ZvZ2k5In0.zCS4uLuoY-v6bfnDzaEoww';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/etiendo/cjcanntla0vsp2st9m3af6liq',
    center: [2.44, 48.90],
    zoom: 10.5,
});

map.addControl(new mapboxgl.NavigationControl());

var geojson = {
    type: 'FeatureCollection',
    features: [{
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [2.4412893, 48.9022659]
        },
        properties: {
            title: 'Cercle Généalogique de l\'Est Parisien',
            description: '18 avenue Salvador Allende - Bobigny'
        }
    }]
}

geojson.features.forEach(function (marker) {

    var el = document.createElement('div');
    el.className = 'marker';

    new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).setPopup(new mapboxgl.Popup({
        offset: 25
    }).setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>')).addTo(map)
});