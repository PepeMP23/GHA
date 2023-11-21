// Function to load the header and footer
function loadHeaderAndFooter() {
    // Load the header content
    
    /*fetch('header.html')
        .then(response => response.text())
        .then(headerHtml => {
            document.getElementById('header-placeholder').innerHTML = headerHtml;
        });*/
    
    // Load the footer content
    fetch('footer.html')
        .then(response => response.text())
        .then(footerHtml => {
            document.getElementById('footer-placeholder').innerHTML = footerHtml;
        });
}

// Call the function to load the header and footer
loadHeaderAndFooter();