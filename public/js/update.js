$(function() {


    $('.EditModal').on('click', function() {

        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/Mahasiswa/EditInfo')


        const id = $(this).data('id');
        
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/Mahasiswa/getEdit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#tahun').val(data.tahun);
                $('#program').val(data.program);
                $('#id').val(data.id);
            }
        });
    });

});