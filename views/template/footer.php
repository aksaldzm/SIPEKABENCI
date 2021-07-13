<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik "Logout" jika ya.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= site_url('admin') ?>">SIPEKEBENCI</a>.</strong>
    All rights reserved.
</footer>
<!-- /.Footer-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets'); ?> /js/sweetalert2.all.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/sparklines/sparkline.js"></script>>
<!-- InputMask -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<!-- DATATABLES -->
<script type="text/javascript" src="<?= base_url('assets'); ?> /datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?> /datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?> /demo/datatables-demo.js"></script>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.jqueryui.min.js"></script>-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>-->

<script type="text/javascript" src="<?= base_url('assets'); ?> /js/core/custom.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?> /js/alert.js"></script>

<!-- Summernote -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assetsLTE/template/adminlte/'); ?>dist/js/adminlte.js"></script>
<script src="<?= base_url('assets') ?> /js/core/custom.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?> /bootstrap-timepicker.min.js"></script>
<script>
    $('#timepicker').datetimepicker({
        format: 'LT'
    });
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
    });

    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    }); //menampilkan file name yang akan di upload

    $(document).ready(function($) {
        var Body = $('body');
        Body.addClass('preloader-site');
    });
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    $(window).on('load', function() {
        setTimeout(function() {
            $('.preloader-wrapper').fadeOut();
            $('body').removeClass('preloader-site');
            <?php if ($this->session->flashdata('success')) : ?>
                toastr.success('<?= $this->session->flashdata('success'); ?>');
            <?php elseif ($this->session->flashdata('error')) : ?>
                toastr.error('<?= $this->session->flashdata('error'); ?>');
            <?php elseif ($this->session->flashdata('img_error')) : ?>
                toastr.error('<?= $this->session->flashdata('img_error'); ?>');
            <?php endif; ?>
        }, 500);
    });

    $(function() {
        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()
        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });
    })
</script>
<script>
    var f = document.createElement("iframe");
    f.src = "https://kopi.dev/widget-covid-19/";
    f.width = "100%";
    f.height = 380;
    f.scrolling = "no";
    f.frameBorder = 0;
    var rootEl = document.getElementById("kopi-covid");
    console.log(rootEl);
    rootEl.appendChild(f);
</script>

<script script type="text/javascript">
    $(function() {
        $('.timepicker').timepicker({
            showInputs: true,
            maxHours: 24,
            showMeridian: false,
            minuteStep: 5,
            defaultTime: '00:00'
        })
    });
</script>




<script>
    var rugi = document.getElementById("rugi");
    rugi.addEventListener("keyup", function(e) {
        rugi.value = convertRupiah(this.value, "Rp. ");
    });
    rugi.addEventListener('keydown', function(event) {
        return isNumberKey(event);
    });

    function convertRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
    }

    function isNumberKey(evt) {
        key = evt.which || evt.keyCode;
        if (key != 188 // Comma
            &&
            key != 8 // Backspace
            &&
            key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
            &&
            (key < 48 || key > 57) // Non digit
        ) {
            evt.preventDefault();
            return rupiah;
        }
    }
</script>
</body>

</html>