<!-- CONTENT -->
<div id="mapid"></div>

<!-- MAP DESA -->
<script type="text/javascript">
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
        <?php foreach ($desa as $key => $value) { ?> {
                "lokasi": [<?= $value->latitude ?>, <?= $value->longitude ?>],
                "nama_desa": "<?= $value->nama_desa ?>",
                "nama_kecamatan": "<?= $value->nama_kecamatan ?>",
                "id_desa": "<?= $value->id_desa ?>"
            },
        <?php } ?>
    ];
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
                    fillOpacity: 0.3,
                    weight: 3,
                    opacity: 1,
                    color: clr + ""
                };
            }
        }).addTo(map)
    });

    var markers = L.markerClusterGroup();
    <?php foreach ($desa as $key => $value) { ?>
        var lokasi = L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
            .bindPopup("<a href='" + base_url + "admin/detail/<?= $value->id_desa ?>' class='btn btn-primary' style='color: white;'>Lihat Detail Desa " + desa + "</a>");

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
        var desa = daataa[i].nama_desa; //value searched
        var id = daataa[i].id_desa;
        var kecamatan = daataa[i].nama_kecamatan;
        var lokasi = daataa[i].lokasi; //position found
        var marker = new L.Marker(new L.latLng(lokasi), {
            title: [desa, kecamatan]
        }); //se property searched

        let table = "<table class='table table-bordered table-striped table-responsive'>";
        table += "<tr style='background-color: orange;'>";
        table += "<td>Bencana</td>";
        table += "<td>Tingkat Resiko</td>";
        table += "</tr>";

        $.ajax({
            url: "http://localhost/inpotenben/home/bencanaDesa/",
            method: "POST",
            data: {
                id: id
            },
            dataType: "json",
            async: false,
            success: function(result) {
                $.each(result, function(key, value) {
                    table += "<tr>";
                    table += "<td>" + value.nama_bencana + "</td>";
                    table += "<td>" + value.resiko + "</td>";
                    table += "</tr>";
                });
            }
        });

        table += "</table>";
        // console.log(table);
        marker.bindPopup(table);
        markersLayer.addLayer(marker);
    }
</script>