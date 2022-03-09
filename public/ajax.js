$(document).ready(function () {
     $('form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: './includes/contact-us-mailer.inc.php',
            data: $('form').serialize(),
            success: function () {
                alert(data)
                $('#contact_form').html('<div class="card bg-primary shadow"><div class="card-header h3 text-center">Sending Message</div><div class="card-body bg-light p-1 shadow-sm"><p class="card-text p-2" id="ajax_message"></p></div><div class="card-footer align-items-center">&nbsp;</div></div>');
                $('#ajax_message').html('<p class="lead text-center">Thank you for choosing DebuggingBytes<br>Please allow us up to 2 business days for a chance to reply. <br></p>')
                .hide()
                .fadeIn(1500, function() {
                    $('#ajax_message').append("<i class='bi bi-check text-success'></i> Your message has been successfuly sent to our team");
                });    
            }
        });

    });

});