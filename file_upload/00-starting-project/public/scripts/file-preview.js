const filePickerElement = document.getElementById('image');
const imagePreviewElement = document.getElementById('image-preview');

function showPreview() {
    console.dir(filePickerElement);
    const files = filePickerElement.files;
    if (!files || files.length === 0) {
        imagePreviewElement.style.display = 'none';
        return;
    }

    const pickedFile = files[0];
    //URL.createObjectURL - generate link for file in ram blob:[different....]
    imagePreviewElement.src = URL.createObjectURL(pickedFile);
    imagePreviewElement.style.display = 'block';
}

filePickerElement.addEventListener('change', showPreview);