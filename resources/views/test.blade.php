Hi this is a test

<div id="displayContent">{!! $htmlContent !!}</div>

<script>
    function updateContentEditableAttribute() {
        // Select the Quill editor element by its class
        var quillEditor = document.querySelector('.ql-editor');

        // Check if the Quill editor element is present
        if (quillEditor) {
            // Set the contenteditable attribute to 'false'
            quillEditor.setAttribute('contenteditable', 'false');

            console.log('Quill editor contenteditable attribute set to false.');

            // Remove the .ql-clipboard div
            var qlClipboard = document.querySelector('.ql-clipboard');
            if (qlClipboard) {
                qlClipboard.parentNode.removeChild(qlClipboard);
                console.log('.ql-clipboard div is deleted.');
            } else {
                console.log('.ql-clipboard div not found.');
            }
        } else {
            console.log('Quill editor element not found.');
        }
    }

    // Example of how to use the function
    document.addEventListener("DOMContentLoaded", function() {
        // Wait for the DOM to be ready
        updateContentEditableAttribute();
    });
</script>

