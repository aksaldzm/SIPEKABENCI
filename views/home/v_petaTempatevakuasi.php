<div id="mapid"></div>

<script>
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });

    var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/satellite-v9'
    });


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });
    var map = L.map('mapid', {
        center: [-7.4636891, 108.9218933],
        zoom: 10,
        layers: [peta2]
    });

    var baseMaps = {
        "Satelite": peta2,
        "Streets": peta1,
        "Light": peta3,
        "Dark": peta4
    };

    L.control.layers(baseMaps).addTo(map);

    var daataa = [
        <?php foreach ($tempat as $key => $value) { ?> {
                "lokasi": [<?= $value->latitude ?>, <?= $value->longitude ?>],
                "nama_tempat": "<?= $value->nama_tempat ?>",
                "luas": "<?= $value->luas ?>",
                "kapasitas": "<?= $value->kapasitas ?>"
            },
        <?php } ?>
    ];

    // var map = new L.Map('mapid', {
    //     zoom: 10,
    //     center: new L.latLng(-7.4636891, 108.9218933)
    // }); //set center from first location

    // map.addLayer(new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // })); //base layer

    // var map = L.map('mapid').setView([-7.4636891, 108.9218933], 10);
    var base_url = "<?= base_url() ?>";

    // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // }).addTo(map);

    $.getJSON(base_url + "assets/geojson/DesaCilacapNew.geojson", function(data) {
        geoLayer = L.geoJson(data, {
            style: function(feature) {

                var clr = feature.properties.warna;
                return {
                    fillOpacity: 0.4,
                    weight: 3,
                    opacity: 1,
                    color: clr + ""
                };
            }
        }).addTo(map)
    });

    var markers = L.markerClusterGroup();
    <?php foreach ($tempat as $key => $value) { ?>
        var lokasi = L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
            .bindPopup("<h4><b><?= $value->nama_tempat ?></b></h4><p>Luas tempat : <?= $value->luas ?> m<sup>2</sup></p><p>Dengan kapasitas maksimal : <?= $value->kapasitas ?> orang</p>");

        markers.addLayer(lokasi);
        map.addLayer(markers);
        map.fitBounds(markers.getBounds());
    <?php } ?>

    var markersLayer = new L.markerClusterGroup(); //layer contain searched elements
    map.addLayer(markersLayer);
    var controlSearch = new L.Control.Search({
        position: 'topright',
        layer: markersLayer,
        initial: false,
        zoom: 19,
        marker: false
    });

    map.addControl(controlSearch);

    ////////////populate map with markers from sample data
    for (i in daataa) {
        var nama = daataa[i].nama_tempat; //value searched
        var luas = daataa[i].luas;
        var kaps = daataa[i].kapasitas;
        var lokasi = daataa[i].lokasi; //position found
        var marker = new L.Marker(new L.latLng(lokasi), {
            title: nama
        }); //se property searched
        marker.bindPopup("<h4><b>" + nama + "</b></h4><p>Luas tempat : " + luas + " m<sup>2</sup></p><p>Dengan kapasitas maksimal : " + kaps + " orang</p>");
        markersLayer.addLayer(marker);
    }

    // $.getJSON(base_url + "admin/tempat", function(data) {
    //     $.each(data, function(i, field) {
    //         var latt = data[i].latitude;
    //         var long = data[i].longitude;
    //         var nama = data[i].nama_tempat;
    //         var luas = data[i].luas;
    //         var kaps = data[i].kapasitas;

    //         L.marker([latt, long]).addTo(map)
    //             .bindPopup("<h4><b>" + nama + "</b></h4><p>Luas tempat : " + luas + "<sup>2</sup></p><p>Dengan kapasitas maksimal : " + kaps + " orang</p>");
    //     });
    // });
</script>