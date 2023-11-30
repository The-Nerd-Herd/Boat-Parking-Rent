<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        setup: (editor) => {
            editor.on('change', (e) => {
                $.ajax({
                    type: 'POST',
                    url: 'php/save.php',
                    data: {
                        editor: tinymce.get('editor').getContent()
                    },
                    success: function(data){
                        $('#editor').val('');
                        console.log(data)
                    }
                })
            })
        },
    });
</script>
