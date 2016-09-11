/**
 * Created by attilaporoszkai on 27/08/16.
 */

document.getElementById('get_location').onclick = function() {
     
        var c = function(pos) {
            var lat = pos.coords.latitude,
               long = pos.coords.longitude,
             coords = lat + ', ' + long;
                
                $.ajax({
                        url: "list.php",
                        type: "post",
                        data: {
                            lat: lat,
                            lng: long
                        },
                        success: function (data) {
                           // you will get response from your php page (what you echo or print)                 
                           $('#places').html(data);
                        },
                    });
        }
    
        navigator.geolocation.getCurrentPosition(c);
        return false;    
}