$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();

        // Get form data
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'submit_form.php',
            data: formData,
            success: function(response) {
                $('#responseMessage').html(response).show();
                $('#registrationForm')[0].reset();
            },
            error: function() {
                $('#responseMessage').html('There was an error processing the form.').show();
            }
        });
    });
});
