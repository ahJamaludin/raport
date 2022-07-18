
// sweetalert 2

const swal = $('.swal').data('swal');
if (swal) {
    Swal.fire({
        title: 'Data Berhasil',
        text: swal,
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
    });
}


// tombol-hapus
$(document).on('click', '.btn-hapus', function (e) {
    //hentikan aksi default
    e.preventDefault();
    const href = $(this).attr('href');  // href => yang lagi di klik

    Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Data yang telah dihapus tidak dapat dikembalikan !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => { // 
        if (result.value) {
            document.location.href = href;      // Jika di tekan oke jalinin ini
        }
    })
});

// tombol-hapus
$(document).on('click', '.btn-remove', function (e) {
    //hentikan aksi default
    e.preventDefault();
    const href = $(this).attr('href');  // href => yang lagi di klik

    Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Mengeluarkan Siswa dari Rombel !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Remove!'
    }).then((result) => { // 
        if (result.value) {
            document.location.href = href;      // Jika di tekan oke jalinin ini
        }
    })
});
