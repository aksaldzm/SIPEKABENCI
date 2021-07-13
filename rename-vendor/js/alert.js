//KONFIRMASI HAPUS
$('.hapus').on('click', function(e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
	  title: 'Apakah anda yakin?',
	  text: "Data akan dihapus",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Hapus data',
	  cancelButtonText: 'Batal',
	  showClass: {
		    popup: 'animate__animated animate__fadeInDown'
		},
		hideClass: {
		    popup: 'animate__animated animate__fadeOutUp'
		}
	}).then((result) => {
	  if (result.isConfirmed) {
	    document.location.href = href;
	  }
	})

});