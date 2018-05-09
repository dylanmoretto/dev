$(function() {
    // Get the form.
    var form = $('#ajax_form');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
	$(form).submit(function(event) {
		// Stop the browser from submitting the form.
		event.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert-danger');
			$(formMessages).addClass('alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert-success');
			$(formMessages).addClass('alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});
		
	});
	
});



$(document).ready(function() {

    $("#newsletter").click(function() {
    	var mail = document.getElementById("subs-email").value; 
        //var mail = $(this).attr('email')
        $.ajax({
            url: 'addmail', // le nom du fichier indiqué dans le formulaire
            type: 'POST', // la méthode indiquée dans le formulaire (get ou post)
            data: 'mail=' + mail, // je sérialise les données, ici les $_POST
            success: function (html) { // je récupère la réponse du fichier PHP
                $("#result").html(html); // ou le résultat est affiché
            }
        }); 
    })
});
