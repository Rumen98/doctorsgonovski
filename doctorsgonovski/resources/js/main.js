window.handleSubmitForm = function handleSubmitForm(event) {
    // Prevent the default form submission
    event.preventDefault();

    const formData = new FormData(document.getElementById('contactForm'));

    fetch('/api/contact/send', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Parse the response as JSON
    })
    .then(parsedData => {
        // Use reset to clear the form
        document.getElementById('contactForm').reset();
        // Show the success alert
        // Show the success alert
        const successAlert = document.getElementById('successAlert');
        successAlert.style.display = 'block';

        // Hide the success alert after 5 seconds
        setTimeout(function() {
            successAlert.style.display = 'none';
        }, 5000);
    })
    .catch(error => {
        console.error('There was an error:', error);
    });

}
