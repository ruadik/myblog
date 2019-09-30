function initialize() {
    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(23.7893837, 90.38596079999999),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(23.7893837, 90.38596079999999),
    });

    marker.setMap(map);
    var infowindow = new google.maps.InfoWindow({
        content: "Our location!"
    });

    infowindow.open(map, marker);

}
google.maps.event.addDomListener(window, 'load', initialize);