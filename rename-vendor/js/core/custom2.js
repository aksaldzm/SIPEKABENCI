$(document).ready(function () {
    $(document).on('change', '#kecamatan', function () {
        let value = $(this).val();
        let select = $('#desa').length;
        let url = "http://localhost/SIPEKEBENCI/admin/desa";
        console.log('ok')
        if (value != "") {
            $.ajax({
                type: "post",
                url: url,
                data: {
                    id: value
                },
                dataType: "json",
                success: function (result) {
                    let html = "";
                    let htmlv = "";
                    html += '<div class="form-group " id="form-desa"><select class="form-control select2" name="desa" id="desa">';
                    htmlv += '<option value="" selected disabled>--Desa--</option>';
                    $.each(result, function (key, value) {
                        htmlv += '<option value="' + value.id_desa + '">' + value.nama + '</option>';
                        console.log(value);
                    });
                    html += '</select></div>';
                    if (select < 1) {
                        $('#form-kecamatan').after(html);
                        $('#desa').html(htmlv);
                    } else {
                        $('#desa').html(htmlv);
                    }
                    console.log(select);
                }
            });
        }
    });
});