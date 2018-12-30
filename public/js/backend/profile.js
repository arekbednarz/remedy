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

};