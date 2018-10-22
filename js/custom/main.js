//-----------------------------------------------
//-------  MAPA 
//-----------------------------------------------
var map;
var contentString = '<img class="card-img-top" src="img/Jorge/logo.png" style="width: 85px;height:85px; margin:10px;"><div jstcache="2"><div jstcache="3" class="title full-width" jsan="7.title,7.full-width">AUTOMOTRIZ IBM (MULTISERVICIOS CHIMO)</div> <div class="address"> <div jstcache="4" jsinstance="0" class="address-line full-width" jsan="7.address-line,7.full-width">Esquina Aquiles Serdán, Calle Esteban Alatorre</div><div jstcache="4" jsinstance="1" class="address-line full-width" jsan="7.address-line,7.full-width">San Juan de Dios</div><div jstcache="4" jsinstance="2" class="address-line full-width" jsan="7.address-line,7.full-width">44360 Guadalajara, Jal.</div><div jstcache="4" jsinstance="*3" class="address-line full-width" jsan="7.address-line,7.full-width">México</div> </div> </div> <div jstcache="5" style="display:none"></div> <div class="view-link"> <a target="_blank" jstcache="6" href="https://maps.google.com/maps?ll=20.680704,-103.326966&amp;z=21&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3&amp;cid=12599520184391969570"> <span>Ver en Google Maps</span> </a> </div> ';
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 20.6806745, lng: -103.326984},
        zoom: 17
    });
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    var marker = new google.maps.Marker({
        position: {lat: 20.6806745, lng: -103.326984},
        map: map,
        title: 'IBM Automotriz'
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    infowindow.open(map, marker);
    marker.setMap(map);
}


