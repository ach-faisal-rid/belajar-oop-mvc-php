$(function() {

    $('.btnTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nisn').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });


    $('.btnUbahData').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:8080/smkti/belajar-oop-mvc-php/public/siswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost:8080/smkti/belajar-oop-mvc-php/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nisn').val(data.nisn);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
        
    });

});