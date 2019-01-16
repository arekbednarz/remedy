//$('.editor').summernote();

var $profilePicPreview = $('#profile-pic-preview').croppie({
    viewport: {
        width: 300,
        height: 300,
        type: 'square'
    },
    boundary: {
        width: 350,
        height: 350
    }
});

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (event) {
            $profilePicPreview.croppie('bind', {
                url: event.target.result
            });
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        alert('Sorry - you\'re browser doesn\'t support the FileReader API');
    }
}

$('#profile-picture-upload').on('change', function() {
    $('#current-profile-picture').hide();
    $('#new-profile-picture').show();
    readFile(this);
});

$('#new-profile-picture').hide();

$('#cancel_new_profile_picture').click(function (e) {
    e.preventDefault();
    $('#current-profile-picture').show();
    $('#new-profile-picture').hide();
});

$('#save_new_profile_picture').click(function (e) {
    e.preventDefault();
    $profilePicPreview.croppie('result', 'base64').then(function(src) {
        $('#profile-picture-preview').attr("src",src);
        $('#profile_picture').val(src);
        $('#store_profile_picture_form').submit();
    });
});




var onEditDescription = function() {
    $('#description').summernote({
        fontSizes: ['10', '12', '14', '18'],
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        placeholder: 'Tutaj napisz opis....',
        tabsize: 2,
        height: 200
    });
};

var onSaveDescription = function() {
    var markup = $('#description').summernote('code');
    $('#description_textarea').val(markup);
    $('#description').summernote('destroy');
};

Dropzone.options.avatarUpload = {
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    dictRemoveFile: 'Usuń plik',
    dictFileTooBig: 'Plik jest większy niż 2MB',
    dictDefaultMessage: 'Tutaj umieść plik',
    timeout: 10000,
    init: function () {

        // Create the mock file:
        var mockFile = { name: "Filename", size: 12345 };

        // Call the default addedfile event handler
        this.emit("addedfile", mockFile);

        // And optionally show the thumbnail of the file:
        this.emit("thumbnail", mockFile, "/image/url");

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
