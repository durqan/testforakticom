$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#download').on('click', function (e) {
        e.preventDefault();

        let formData = new FormData();
        formData.append('file', $("#inputGroupFile02")[0].files[0]);

        let btn_table = '<insert class="btn btn-info" id="open_file">Просмотреть файл</insert>';

        $.ajax({
            type: "POST",
            url: '/upload',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (suc) {
                alert('Файл успешно отправлен в базу');
                $('#result').html(btn_table);
            }
        })
    });

    $(document).on('click', '#open_file', function (e) {
        e.preventDefault();

        console.log('success');

        let formData = new FormData();
        formData.append('file', $("#inputGroupFile02")[0].files[0]);

        $.ajax({
            type: "POST",
            url: '/view_table',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (suc) {
                $('#html').html(suc)
            }
        })
    })
});
