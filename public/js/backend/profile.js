$('.editor').summernote({
    fontSizes: ['10', '14'],
    toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['fontsize', ['fontsize']],
        ['para', ['ul', 'ol', 'paragraph']]
    ],
    placeholder: 'Write here your description....',
    tabsize: 2,
    height: 200
});


Dropzone.options.avatarUpload = {
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    dictRemoveFile: 'Usuń plik',
    dictFileTooBig: 'Plik jest większy niż 2MB',
    timeout: 10000,
    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: '/admin/remove_file',
                data: {filename: $('#avatar_filename').val(), _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    $('#avatar_filename').val('');
                }
            });
        });
    },
    success: function (file, done) {
        $('#avatar_filename').val(done);
    }

};