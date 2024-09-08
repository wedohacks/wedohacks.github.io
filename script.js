function showFile(fileName) {
    const fileViewer = document.getElementById('file-viewer');
    
    // Clear previous content
    fileViewer.innerHTML = '';

    if (fileName.endsWith('.txt')) {
        fetch(fileName)
            .then(response => response.text())
            .then(text => {
                fileViewer.textContent = text;
            })
            .catch(error => {
                fileViewer.textContent = 'Error loading file.';
            });
    } else if (fileName.endsWith('.pdf')) {
        fileViewer.innerHTML = `<iframe src="${fileName}" width="100%" height="600px"></iframe>`;
    } else if (fileName.endsWith('.md')) {
        fetch(fileName)
            .then(response => response.text())
            .then(markdown => {
                // Convert Markdown to HTML (simple example)
                const converter = new showdown.Converter();
                const html = converter.makeHtml(markdown);
                fileViewer.innerHTML = html;
            })
            .catch(error => {
                fileViewer.textContent = 'Error loading file.';
            });
    } else if (fileName.endsWith('.jpg')) {
        fileViewer.innerHTML = `<img src="${fileName}" alt="Image" style="max-width: 100%; height: auto;">`;
    } else {
        fileViewer.textContent = 'Unsupported file type.';
    }
}
