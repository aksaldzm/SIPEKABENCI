    // var map = L.map('mapid').setView([-7.4609658, 108.6953003], 10);
    // var base_url = "<?= base_url() ?>";

    // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // }).addTo(map);

    // $.getJSON(base_url + "assets/geojson/mapCilacap.geojson", function(data) {
    //     geoLayer = L.geoJson(data, {
    //         style: function(feature) {

    //             var clr = feature.properties.warna;
    //             return {
    //                 fillOpacity: 0.8,
    //                 weight: 1,
    //                 opacity: 1,
    //                 color: clr + ""
    //             };
    //         },

    //         onEachFeature: function(feature, layer) {
    //             var kode = parseFloat(feature.properties.id);
    //             var kec = feature.properties.KECAMATAN;
    //             var latt = parseFloat(feature.properties.latitude);
    //             var long = parseFloat(feature.properties.longitude);
    //             var info = "<h5 style='text-align:center'>INFORMASI KECAMATAN " + kec + "</h5>";

    //             L.marker([latt, long]).addTo(map)
    //                 .bindPopup(kec)
    //                 .openPopup();
    //         }
    //     }).addTo(map)
    // });

    // var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/streets-v11'
    // });

    // var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/satellite-v9'
    // });


    // var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // });

    // var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/dark-v10'
    // });

    // var baseMaps = {
    //     "Light": peta1,
    //     "Satelite": peta2,
    //     "Street": peta3,
    //     "Dark": peta4
    // };

    // L.control.layers(baseMaps).addTo(map);
    var map = L.map('mapid').setView([-7.4636891, 108.9218933], 10);
    var base_url = "<?= base_url() ?>";

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    $.getJSON(base_url + "assets/geojson/mapCilacap.geojson", function(data) {
        geoLayer = L.geoJson(data, {
            style: function(feature) {

                var clr = feature.properties.warna;
                return {
                    fillOpacity: 0.0,
                    weight: 4,
                    opacity: 1,
                    color: clr + ""
                };
            },

            onEachFeature: function(feature, layer) {
                var kode = parseFloat(feature.properties.id);
                var kec = feature.properties.KECAMATAN;
                // var latt = parseFloat(feature.properties.latitude);
                // var long = parseFloat(feature.properties.longitude);
                var info = "<h5 style='text-align:center'>INFORMASI KECAMATAN " + kec + "</h5>";

                // L.marker([latt, long]).addTo(map)
                //     .bindPopup(kec)
                //     .openPopup();
                layer.bindPopup(info, {
                    maxWidth: 260,
                    closeButton: true,
                    offset: L.point(0, -20)
                });

                layer.on('click', function() {
                    layer.openPopup();
                });
            }
        }).addTo(map)
    });