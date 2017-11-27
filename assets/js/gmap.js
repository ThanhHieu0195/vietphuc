(function ($) {
    var mapLocation = new google.maps.LatLng(10.7294383, 106.6863134); //change coordinates here
    var marker;
    var map;
    function initialize() {
        var mapOptions = {
            zoom: 15, // Change zoom here
            center: mapLocation,
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);


        //change address details here
        var contentString = '<div class="map-info">'
            + '<div class="map-title">'
            + '<div class="brand" href=""><div class="brand-info"><div class="brand-name">Việt Phúc</div></div></div></div>'
            + '<p class="map-address">'
            + '<div class="map-address-row">'
            + '  <i class="fa fa-map-marker"></i>'
            + '  <span class="text"><strong>21 đường 24 Khu Dân Cư Him  Lam, </strong><br>'
            + '  Xã Bình Hưng, Huyện Bình Chánh</span>'
            + '</div>'
            + '<div class="map-address-row">'
            + '   <i class="fa fa-phone"></i>'
            + '   <span class="text">(028) 123 456 789</span>'
            + '</div>'
            + '<div class="map-address-row">'
            + '   <span class="map-email">'
            + '      <i class="fa fa-envelope"></i>'
            + '      <span class="text">support@vietphuc.vn</span>'
            + '   </span>'
            + '</div>'
            + '<p class="gmap-open"><a href="https://www.google.com/maps/@-37.824812,144.965981,14z?hl=ru-RU" target="_blank">Open on Google Maps</a></p></div>';


        var infowindow = new google.maps.InfoWindow({
            content: contentString,
        });


        // Uncomment down to show Marker


        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            title: 'Việt Phúc', //change title here
            animation: google.maps.Animation.DROP,
            position: mapLocation
        });



        // Uncomment down to show info window on marker

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });




    }

    if ($('#map').length) {
        google.maps.event.addDomListener(window, 'load', initialize);
    }
})(jQuery);